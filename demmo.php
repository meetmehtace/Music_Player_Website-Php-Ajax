<html>
<head>
<style>

    body {
	margin: 3em;
}

* {
	padding: 0;
	margin: 0;
}

.menu-wrapper {
	position: relative;
	max-width: 500px;
	height: 100px; // hide the scroll bar
	margin: 1em auto;
	border: 1px solid black;
	overflow-x: hidden;
	overflow-y: hidden;
}

.menu	{
	height: 120px; // hide the scroll bar
	background: #f3f3f3;
	box-sizing: border-box;
	
	white-space: nowrap;
	overflow-x: auto;
	overflow-y: hidden;
	-webkit-overflow-scrolling: touch;
	
	.item {
		display: inline-block;
		width: 100px;
		height: 100%;
		outline: 1px dotted gray;
		padding: 1em;
		box-sizing: border-box;
	}
}

.paddles {
}
.paddle {
	position: absolute;
	top: 0;
	bottom: 0;
	width: 3em;
}
.left-paddle {
	left: 0;
}
.right-paddle {
	right: 0;
}
.hidden {
	display: none;
}

.print {
	margin: auto;
	max-width: 500px;
	
	span {
		display: inline-block;
		width: 100px;
	}
}

</style>
</head>
<body>
    
    <div class="menu-wrapper">
	<ul class="menu">
	<li class="item"> <a href="index.php"><img src="plylist.jpg" ></a></li>
    <li class="item"> <a href="index.php"><img src="plylist.jpg" ></a></li>
    <li class="item"> <a href="index.php"><img src="plylist.jpg" ></a></li>
    <li class="item"> <a href="index.php"><img src="plylist.jpg" ></a></li>
    <li class="item"> <a href="index.php"><img src="plylist.jpg" ></a></li>
	</ul>

	<div class="paddles">
		<button class="left-paddle paddle hidden">
			<
		</button>
		<button class="right-paddle paddle">
			>
		</button>
	</div>

</div>

<div class="print" id="print-wrapper-size"><span></span> Wrapper / visible menu size</div>
<div class="print" id="print-menu-size"><span></span> Total menu size</div>
<div class="print" id="print-menu-invisible-size"><span></span> Invisible menu size</div>
<div class="print" id="print-menu-position"><span></span> Scroll position</div>
    

<script>
// duration of scroll animation
var scrollDuration = 300;
// paddles
var leftPaddle = document.getElementsByClassName('left-paddle');
var rightPaddle = document.getElementsByClassName('right-paddle');
// get items dimensions
var itemsLength = $('.item').length;
var itemSize = $('.item').outerWidth(true);
// get some relevant size for the paddle triggering point
var paddleMargin = 20;

// get wrapper width
var getMenuWrapperSize = function() {
	return $('.menu-wrapper').outerWidth();
}
var menuWrapperSize = getMenuWrapperSize();
// the wrapper is responsive
$(window).on('resize', function() {
	menuWrapperSize = getMenuWrapperSize();
});
// size of the visible part of the menu is equal as the wrapper size 
var menuVisibleSize = menuWrapperSize;

// get total width of all menu items
var getMenuSize = function() {
	return itemsLength * itemSize;
};
var menuSize = getMenuSize();
// get how much of menu is invisible
var menuInvisibleSize = menuSize - menuWrapperSize;

// get how much have we scrolled to the left
var getMenuPosition = function() {
	return $('.menu').scrollLeft();
};

// finally, what happens when we are actually scrolling the menu
$('.menu').on('scroll', function() {

	// get how much of menu is invisible
	menuInvisibleSize = menuSize - menuWrapperSize;
	// get how much have we scrolled so far
	var menuPosition = getMenuPosition();

	var menuEndOffset = menuInvisibleSize - paddleMargin;

	// show & hide the paddles 
	// depending on scroll position
	if (menuPosition <= paddleMargin) {
		$(leftPaddle).addClass('hidden');
		$(rightPaddle).removeClass('hidden');
	} else if (menuPosition < menuEndOffset) {
		// show both paddles in the middle
		$(leftPaddle).removeClass('hidden');
		$(rightPaddle).removeClass('hidden');
	} else if (menuPosition >= menuEndOffset) {
		$(leftPaddle).removeClass('hidden');
		$(rightPaddle).addClass('hidden');
}

	// print important values
	$('#print-wrapper-size span').text(menuWrapperSize);
	$('#print-menu-size span').text(menuSize);
	$('#print-menu-invisible-size span').text(menuInvisibleSize);
	$('#print-menu-position span').text(menuPosition);

});

// scroll to left
$(rightPaddle).on('click', function() {
	$('.menu').animate( { scrollLeft: menuInvisibleSize}, scrollDuration);
});

// scroll to right
$(leftPaddle).on('click', function() {
	$('.menu').animate( { scrollLeft: '0' }, scrollDuration);
});

</script>
    
</body>    
</html>