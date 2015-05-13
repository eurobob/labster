</main>

<?php 

// Grunticon stuff for lazily loaded svg embedding & styling
$embeddedSVGdir = 'wp-content/themes/labster/dist/img/svg/embed';
?>
<script src="<?php echo $embeddedSVGdir; ?>grunticon.loader.js"></script>
<script>
	var embeddedSVGdir = '<?php echo $embeddedSVGdir; ?>';
	grunticon([
		embeddedSVGdir + 'icons.data.svg.css',
		embeddedSVGdir + 'icons.data.png.css',
		embeddedSVGdir + 'icons.fallback.css'
	], grunticon.svgLoadedCallback);
</script>

</body>
</html>