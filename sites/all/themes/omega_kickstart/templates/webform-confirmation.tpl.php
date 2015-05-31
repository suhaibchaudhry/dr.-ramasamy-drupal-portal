<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>

<div class="webform-confirmation">
  <?php if ($confirmation_message): ?>
    <?php print $confirmation_message ?>
  <?php else: ?>
    <p><?php print t("We have dispatched your inquiry to our team. A representative from Dr. Ranjith Ramasamy's office will review your request and get back with you as soon as possible. You may contact us at 1 (305) 243-4562 for immediate assistance, however if this is a medical emergency please call 911 instead."); ?></p>
    <p><?php print t("Thank you."); ?></p>
  <?php endif; ?>
</div>
