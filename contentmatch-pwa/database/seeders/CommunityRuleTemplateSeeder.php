<?php

namespace Database\Seeders;

use App\Models\CommunityRuleTemplate;
use Illuminate\Database\Seeder;

class CommunityRuleTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $ruleTemplates = [
            [
                'title' => 'Be Respectful',
                'description' => 'Treat all members with respect. No harassment, hate speech, or bullying.',
                'category' => 'behavior',
                'order' => 1,
                'is_default' => true
            ],
            [
                'title' => 'No Spam',
                'description' => 'Avoid repetitive content, excessive self-promotion, or irrelevant links.',
                'category' => 'content',
                'order' => 2,
                'is_default' => true
            ],
            [
                'title' => 'Quality Content',
                'description' => 'Share meaningful, well-crafted content that adds value to the community.',
                'category' => 'content',
                'order' => 3,
                'is_default' => true
            ],
            [
                'title' => 'Stay On Topic',
                'description' => 'Keep discussions relevant to the community\'s purpose and theme.',
                'category' => 'content',
                'order' => 4,
                'is_default' => false
            ],
            [
                'title' => 'Constructive Feedback',
                'description' => 'Provide helpful, constructive feedback. Avoid harsh criticism.',
                'category' => 'engagement',
                'order' => 5,
                'is_default' => false
            ]
        ];

        foreach ($ruleTemplates as $template) {
            CommunityRuleTemplate::create($template);
        }
    }
}
