<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="notePadTextarea.css">

<header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">WELCOME ADMIN!</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">This is the announcements page</h2>
                <a class="btn btn-primary js-scroll-trigger" href="#addannouncement"><b>Add Announcement</b></a>
            </div>
        </div>
    </header>
    <?php include 'adminTopbar.php'; ?>
    <body>
<section class="projects-section bg-light">
<div id="wrapper">

	<form id="paper" method="get" action="">

		<div id="margin">Title: <input id="title" type="text" name="title"></div>
		<textarea placeholder="Enter something funny." id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
		<br>
		<input id="button" type="submit" value="Create">
		
	</form>

</div>
</section>
<script src="notePadTextarea.js"></script>
</body>
</html>