<?php
$pageTitle = 'Practice Automation & AI Tools | Omulus AI';
$pageDescription = 'AI-powered automation for medical practices — scheduling, follow-up, CRM, and reputation management that runs 24/7.';
$currentPage = 'automation';
$serviceName = 'Practice Automation';
$serviceTagline = 'AI-powered workflows that handle follow-up, scheduling, and patient communication — 24/7, without your staff lifting a finger.';
$serviceDescription = 'Every missed call, slow follow-up, or unfilled appointment slot costs your practice money. Omulus AI\'s automation platform plugs these leaks automatically — responding to leads within seconds, filling your schedule, and keeping patients engaged between visits. It\'s like adding a tireless team member who never sleeps.';
$serviceStats = [
  ['value' => '<60s', 'label' => 'Lead Response Time'],
  ['value' => '-40%', 'label' => 'No-Show Rate'],
  ['value' => '24/7', 'label' => 'Always On'],
];
$serviceFeatures = [
  ['icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>', 'title' => 'Instant Lead Response', 'desc' => 'AI responds to new leads via SMS and email within 60 seconds — dramatically increasing your conversion rate.'],
  ['icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>', 'title' => 'AI Appointment Booking', 'desc' => 'Smart scheduling assistant that books consultations automatically based on your calendar availability and patient preferences.'],
  ['icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/></svg>', 'title' => 'Appointment Reminders', 'desc' => 'Automated SMS and email reminders that reduce no-shows by 40% and give patients the option to reschedule easily.'],
  ['icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>', 'title' => 'CRM & Lead Tracking', 'desc' => 'Full patient and lead CRM integrated with your marketing channels — see every touchpoint in one place.'],
  ['icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>', 'title' => 'Review Automation', 'desc' => 'Automatically request reviews from satisfied patients post-visit and route unhappy patients to private resolution.'],
  ['icon' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 17H7A5 5 0 017 7h2M15 7h2a5 5 0 010 10h-2M8 12h8"/></svg>', 'title' => 'Platform Integrations', 'desc' => 'Connects with major practice management systems including Athena, Epic, Kareo, and others via API and webhooks.'],
];
require_once 'includes/service-template.php';
