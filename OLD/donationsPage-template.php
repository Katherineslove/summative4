<?php
/*
Template Name: Donations
Template Post Type: page
*/
?>

<?php get_header(); ?>

<div class="container-fluid p-0">

    <div class="row d-flex justify-content-center py-5">
        <div class="col-9">
            <div class="card mt-3 borderColour">
                <h5 class="card-header"><?php the_title(); ?></h5>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address..">

                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Add your message here..."></textarea>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <button type="submit" class="btn btnColour">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
