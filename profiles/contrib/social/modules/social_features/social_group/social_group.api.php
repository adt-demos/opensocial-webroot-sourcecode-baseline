<?php

/**
 * @file
 * Hooks provided by the Social Group module.
 */

use Drupal\group\Entity\GroupInterface;
use Drupal\node\NodeInterface;

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Provide a method to alter array of group types used in open social.
 *
 * @param array $social_group_types
 *   List of group types used in open social.
 *
 * @ingroup social_group_api
 */
function hook_social_group_types_alter(array &$social_group_types) {
  $social_group_types[] = 'challenge';
}

/**
 * Hide group types used in open social.
 *
 * @param array $hidden_types
 *   List of group type id's which you want to see removed.
 *
 * @ingroup social_group_api
 */
function hook_social_group_hide_types_alter(array &$hidden_types) {
  $hidden_types[] = 'challenge';
}

/**
 * Provide a method to alter the default content visibility for a group type.
 *
 * @param string $visibility
 *   The visibility option that is default.
 * @param string $group_type_id
 *   The group type we alter the visibility setting for.
 *
 * @ingroup social_group_api
 */
function hook_social_group_default_visibility_alter(&$visibility, $group_type_id) {
  switch ($group_type_id) {
    case 'custom_public_group':
      $visibility = 'public';

      break;

    case 'custom_open_group':
      $visibility = 'community';

      break;

    case 'custom_closed_group':
      $visibility = 'group';

      break;
  }
}

/**
 * Provide a method to alter the allowed content visibility for a group type.
 *
 * @param array $visibilities
 *   The visibilities list.
 * @param string $group_type_id
 *   The group type we alter the visibility setting for.
 *
 * @see social_group_get_allowed_visibility_options_per_group_type()
 *
 * @ingroup social_group_api
 */
function hook_social_group_allowed_visibilities_alter(array &$visibilities, $group_type_id) {
  if ($group_type_id === 'custom_public_group') {
    $visibilities['community'] = TRUE;
  }
}

/**
 * Provide a method to alter default group overview route.
 *
 * @param array $route
 *   An array with route name and parameters.
 * @param \Drupal\group\Entity\GroupInterface $group
 *   Current group entity.
 *
 * @ingroup social_group_api
 */
function hook_social_group_overview_route_alter(array &$route, GroupInterface $group) {
  if ($group->bundle() === 'challenge') {
    $route = [
      'name' => 'view.challenges_user.page',
      'parameters' => ['user' => \Drupal::currentUser()->id()],
    ];
  }
}

/**
 * Provide a method to return node which was moved to another group.
 *
 * @param \Drupal\node\NodeInterface $node
 *   The event or topic node.
 *
 * @ingroup social_group_api
 */
function hook_social_group_move(NodeInterface $node) {
  \Drupal::messenger()->addStatus(t('@title is moved.', [
    '@title' => $node->getTitle(),
  ]));
}

/**
 * Provide a description for a given key from the content visibility #options.
 *
 * @param string $description
 *   The descriptive.
 *
 * @ingroup social_group_api
 */
function hook_social_group_content_visibility_description_alter($key, &$description) {
  switch ($key) {
    case 'custom_role_1':
      $description = '<p><strong><svg class="icon-small"><use xlink:href="#icon-lock"></use></svg></strong>';
      $description .= '<strong>' . t('Custom role 1')->render() . '</strong>';
      $description .= '-' . t('All users with this role can see it')->render();
      $description .= '</p>';
      break;

    case 'custom_role_2':
      $description = '<p><strong><svg class="icon-small"><use xlink:href="#icon-community"></use></svg></strong>';
      $description .= '<strong>' . t('Custom role 2')->render() . '</strong>';
      $description .= '-' . t('All users with this role can change it')->render();
      $description .= '</p>';
      break;
  }
}

/**
 * Provide a description for a given key from the group_visibility #options.
 *
 * @param string $description
 *   The descriptive.
 *
 * @ingroup social_group_api
 */
function hook_social_group_group_visibility_description_alter($key, &$description) {
  switch ($key) {
    case 'custom_role_1':
      $description = '<p><strong><svg class="icon-small"><use xlink:href="#icon-lock"></use></svg></strong>';
      $description .= '<strong>' . t('Custom role 1')->render() . '</strong>';
      $description .= '-' . t('All users with this role can see it')->render();
      $description .= '</p>';
      break;

    case 'custom_role_2':
      $description = '<p><strong><svg class="icon-small"><use xlink:href="#icon-community"></use></svg></strong>';
      $description .= '<strong>' . t('Custom role 2')->render() . '</strong>';
      $description .= '-' . t('All users with this role can change it')->render();
      $description .= '</p>';
      break;
  }
}

/**
 * Provide a description for a given key from the content visibility #options.
 *
 * @param string $description
 *   The descriptive.
 *
 * @ingroup social_group_api
 */
function hook_social_group_allowed_join_method_description_alter($key, &$description) {
  switch ($key) {
    case 'join_method_extra':
      $description = '<strong>' . t('QR Code')->render() . '</strong>';
      $description .= '-' . t('All users can join by scanning a QR code')->render();
      $description .= '</p>';
      break;

    case 'single_sign_on':
      $description = '<strong>' . t('Single Sign on')->render() . '</strong>';
      $description .= '-' . t('All users can join by SSO')->render();
      $description .= '</p>';
      break;
  }
}

/**
 * Provide a method to extend group and content visibility to other group types.
 *
 * @param string $social_group_types
 *   The group type id.
 *
 * @ingroup social_group_api
 */
function hook_social_group_settings_alter(&$social_group_types) {
  $social_group_types[] = 'flexible_group';
}

/**
 * Extends content types list which can be added to multiple groups.
 *
 * @param array $content_types
 *   The content types ids list.
 *
 * @ingroup social_group_api
 */
function hook_social_group_cross_posting_alter(array &$content_types) {
  $content_types[] = 'topic';
}

/**
 * @} End of "addtogroup hooks".
 */
