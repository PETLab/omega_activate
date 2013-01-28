<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <div class="codex-topic">
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php
$totalrows = 0;

foreach ($rows as $id => $row){ 
	$totalrows++;
}
 ?>


<?php foreach ($rows as $id => $row): ?>

<?php 
$extra_class = "";
// print $id.$totalrows;
if($id == $totalrows) {
	$extra_class = " last";
}
?>
  <div class="<?php print $classes_array[$id].$extra_class;  ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>