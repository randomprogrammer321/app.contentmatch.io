# Route Documentation

This document provides an overview of all routes in the application, organized by their respective modules.

## Table of Contents
1. [Web Routes](#web-routes)
2. [Authentication Routes](#authentication-routes)
3. [User Routes](#user-routes)
4. [Content Routes](#content-routes)
5. [Engagement Routes](#engagement-routes)
6. [Community Routes](#community-routes)
7. [Match Routes](#match-routes)
8. [Explore Routes](#explore-routes)
9. [Messaging Routes](#messaging-routes)
10. [Notification Routes](#notification-routes)
11. [Premium Routes](#premium-routes)
12. [Admin Routes](#admin-routes)

## Web Routes
These are the main public routes 
| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | / | HomeController@index | home |
| GET | /about | HomeController@about | about |
| GET | /contact | HomeController@contact | contact |

## Authentication Routes
Routes related to user authentication and registration.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /login | Auth\LoginController@showLoginForm | login |
| POST | /login | Auth\LoginController@login | - |
| GET | /register | Auth\RegisterController@showRegistrationForm | register |
| POST | /register | Auth\RegisterController@register | - |
| POST | /logout | Auth\LoginController@logout | logout |
| GET | /oauth/{provider} | Auth\SocialiteController@redirectToProvider | oauth.redirect |
| GET | /oauth/{provider}/callback | Auth\SocialiteController@handleProviderCallback | oauth.callback |

## User Routes
Routes for user-specific actions and pages.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /dashboard | UserController@dashboard | dashboard |
| GET | /profile | UserController@showProfile | profile |
| PUT | /profile | UserController@updateProfile | profile.update |
| GET | /settings | UserController@showSettings | settings |
| PUT | /settings | UserController@updateSettings | settings.update |
| GET | /onboarding | UserController@showOnboarding | onboarding |
| POST | /onboarding/complete | UserController@completeOnboarding | onboarding.complete |
| GET | /analytics | UserController@showAnalytics | analytics |

## Content Routes
Routes for managing and viewing content.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /feed | ContentController@feed | feed |
| GET | /content/create | ContentController@create | content.create |
| POST | /content | ContentController@store | content.store |
| GET | /content/{id} | ContentController@show | content.show |
| PUT | /content/{id} | ContentController@update | content.update |
| DELETE | /content/{id} | ContentController@destroy | content.destroy |
| POST | /content/{id}/report | ContentController@report | content.report |
| GET | /content/{id}/analytics | ContentController@showAnalytics | content.analytics |

## Engagement Routes
Routes for user engagement and feedback.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| POST | /engagement | EngagementController@store | engagement.store |
| POST | /feedback | FeedbackController@store | feedback.store |
| POST | /engagement-request | EngagementRequestController@store | engagement-request.store |
| GET | /engagement-history | EngagementController@history | engagement.history |
| GET | /feedback-received | FeedbackController@received | feedback.received |
| GET | /feedback-given | FeedbackController@given | feedback.given |

## Community Routes
Routes for community-related actions.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /communities | CommunityController@index | communities.index |
| GET | /communities/create | CommunityController@create | communities.create |
| POST | /communities | CommunityController@store | communities.store |
| GET | /communities/{id} | CommunityController@show | communities.show |
| PUT | /communities/{id} | CommunityController@update | communities.update |
| DELETE | /communities/{id} | CommunityController@destroy | communities.destroy |
| POST | /communities/{id}/join | CommunityController@join | communities.join |
| POST | /communities/{id}/leave | CommunityController@leave | communities.leave |
| GET | /communities/{id}/members | CommunityController@members | communities.members |
| GET | /communities/{id}/analytics | CommunityController@analytics | communities.analytics |

## Match Routes
Routes for the creator matching feature.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /match | MatchController@index | match.index |
| POST | /match | MatchController@store | match.store |
| GET | /match/history | MatchController@history | match.history |
| GET | /match/preferences | MatchController@preferences | match.preferences |
| PUT | /match/preferences | MatchController@updatePreferences | match.preferences.update |
| GET | /collaborations | CollaborationController@index | collaborations.index |
| POST | /collaborations | CollaborationController@store | collaborations.store |

## Explore Routes
Routes for exploring content and creators.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /explore | ExploreController@index | explore.index |
| GET | /explore/search | ExploreController@search | explore.search |
| GET | /explore/creators | ExploreController@creators | explore.creators |
| GET | /explore/communities | ExploreController@communities | explore.communities |
| GET | /explore/content | ExploreController@content | explore.content |
| GET | /explore/trending | ExploreController@trending | explore.trending |

## Messaging Routes
Routes for the messaging system.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /messages | MessageController@index | messages.index |
| GET | /messages/{id} | MessageController@show | messages.show |
| POST | /messages | MessageController@store | messages.store |
| DELETE | /messages/{id} | MessageController@destroy | messages.destroy |
| POST | /messages/{id}/read | MessageController@markAsRead | messages.read |

## Notification Routes
Routes for managing notifications.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /notifications | NotificationController@index | notifications.index |
| PUT | /notifications/{id}/read | NotificationController@markAsRead | notifications.read |
| PUT | /notifications/read-all | NotificationController@markAllAsRead | notifications.read-all |
| GET | /notifications/settings | NotificationController@settings | notifications.settings |
| PUT | /notifications/settings | NotificationController@updateSettings | notifications.settings.update |

## Premium Routes
Routes for premium features and subscription management.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /premium | PremiumController@index | premium.index |
| POST | /premium/subscribe | PremiumController@subscribe | premium.subscribe |
| POST | /premium/cancel | PremiumController@cancel | premium.cancel |
| GET | /premium/invoices | PremiumController@invoices | premium.invoices |
| GET | /premium/features | PremiumController@features | premium.features |

## Admin Routes
Routes for administrative actions.

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /admin/dashboard | AdminController@dashboard | admin.dashboard |
| GET | /admin/users | AdminController@users | admin.users |
| GET | /admin/content | AdminController@content | admin.content |
| GET | /admin/communities | AdminController@communities | admin.communities |
| GET | /admin/reports | AdminController@reports | admin.reports |
| GET | /admin/analytics | AdminController@analytics | admin.analytics |
| GET | /admin/settings | AdminController@settings | admin.settings |
