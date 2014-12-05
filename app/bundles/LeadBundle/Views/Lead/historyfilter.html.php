<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<!-- filter form -->
<form action="" class="panel" id="timeline-filters">
    <div class="form-control-icon pa-xs">
        <input type="text" class="form-control bdr-w-0" name="search" id="search" placeholder="<?php echo $view['translator']->trans('mautic.core.search.placeholder'); ?>">
        <span class="the-icon fa fa-search text-muted mt-xs"></span>
        <?php if (isset($eventTypes) && is_array($eventTypes)) : ?>
            <select name="eventFilters[]" multiple="multiple" class="form-control bdr-w-0" data-placeholder="<?php echo $view['translator']->trans('mautic.lead.lead.filter.bundles.placeholder'); ?>">
            <?php foreach ($eventTypes as $typeKey => $typeName) : ?>
                <option value="<?php echo $typeKey; ?>"<?php echo in_array($typeKey, $eventFilter) ? ' selected' : ''; ?> >
                    <?php echo $typeName; ?>
                </option>
            <?php endforeach; ?>
            </select>
        <?php endif; ?>
    </div>
    <input type="hidden" name="leadId" id="leadId" value="<?php echo $lead->getId(); ?>" />
</form>
<!--/ filter form -->
