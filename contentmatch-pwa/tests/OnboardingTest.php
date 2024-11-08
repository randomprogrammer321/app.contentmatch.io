<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use App\Models\Interest;
use App\Models\SupportiveCause;
use App\Models\AudienceSize;
use App\Models\Category;
use App\Models\Purpose;
use App\Models\OnboardingStep;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
/** @test */


class OnboardingTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Run your seeders
        $this->seed();
        
        // Create user directly
        $this->user = User::factory()->create([
            'onboarding_completed_at' => null
        ]);
    }

    #[Test]
    public function it_redirects_unauthenticated_users_to_login()
    {
        $response = $this->get(route('step1'));
        $response->assertRedirect(route('login'));
    }

    #[Test]
    public function it_allows_authenticated_users_to_view_step1()
    {
        $response = $this->actingAs($this->user)->get(route('step1'));
        $response->assertStatus(200);
    }

    #[Test]
    public function it_can_save_step3_data()
    {
        $interests = Interest::where('is_active', true)->take(3)->get();
        $causes = SupportiveCause::where('is_active', true)->take(3)->get();
        $purposes = Purpose::where('is_active', true)->take(2)->get();

        $data = [
            'interests' => $interests->pluck('id')->toArray(),
            'causes' => $causes->pluck('id')->toArray(),
            'purposes' => $purposes->pluck('id')->toArray()
        ];

        $response = $this->actingAs($this->user)
            ->post(route('step3.save'), $data);

        $response->assertRedirect(route('step4'));
        
        $this->assertEquals(
            $interests->pluck('id')->toArray(),
            $this->user->fresh()->interests->pluck('id')->toArray()
        );

        $this->assertEquals(
            $causes->pluck('id')->toArray(),
            $this->user->fresh()->supportiveCauses->pluck('id')->toArray()
        );

        $this->assertEquals(
            $purposes->pluck('id')->toArray(),
            $this->user->fresh()->purposes->pluck('id')->toArray()
        );
    }

    #[Test]
    public function it_validates_required_fields_in_step3()
    {
        $response = $this->actingAs($this->user)
            ->post(route('step3.save'), []);

        $response->assertSessionHasErrors([
            'interests', 
            'causes',
            'purposes'
        ]);
    }

    #[Test]
    public function it_prevents_access_to_other_pages_during_onboarding()
    {
        $response = $this->actingAs($this->user)
            ->get(route('feed.home'));

        $response->assertRedirect(route('step1'));
    }
} 