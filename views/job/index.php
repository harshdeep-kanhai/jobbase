<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h2 class="page-header">Jobs <a class="btn btn-primary pull-right" href="/jobbase/web/index.php?r=job/create">Create</a>
</h2>

<?php if(!empty($jobs)) : ?>
<ul class="list-group">
    <?php foreach($jobs as $job) : ?>
        <?php $phpdate = strtotime($job->create_date); ?>
        <?php $formatted_date = date("F j, Y, g:i a"); ?>
        <li class="list-group-item">
            <a href="/jobbase/web/index.php?r=job/details&id=<?php echo $job->id; ?>">
                <?php echo $job->title; ?></a> - <strong><?php echo $job->city; ?> <?php echo $job->state; ?></strong> - Listed on <?php echo $formatted_date; ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php else : ?>
    <p>No jobs to list</p>
<?php endif; ?>

<?= LinkPager::widget(['pagination' => $pagination]);