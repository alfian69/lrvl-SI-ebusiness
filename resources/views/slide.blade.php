
<style>
    .linkpop_a {
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
    .linkpop_a:hover {
        background-color: #a22;
    }
    .linkpop_b {
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
    .linkpop_b:hover {
        background-color: #aaa;
    }
    .carousel-caption {
        /*bottom: 40px !important;*/
        bottom: 0 !important;
        width: 100%;
        left: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0 15%;
    }
    .header-slider{
        margin-bottom: 15px;
    }
    @media only screen and (max-width: 750px) {
        .header-slider {
            margin-bottom: 6px !important;
        }
    }
</style>
<div class="bd-example" style="margin-top: -150px;">
    <div id="platinum_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ url('/image/tv.png') }}" class="d-block" style="width: 100%; height: 90%;">
                <div class="carousel-caption">
                    <div class="bg-wrapper" style="width: 100%; text-decoration: none;">
                        <div class="container">
                            <div class="row justify-content-around">
                                <a href="" class="linkpop_a" style="text-decoration: none;">
                                    <div style="background-color: rgba(255,0,0,0.7); height: 50px; width: 200px; color: black; padding-top: 10px;">CUSTOM</div>
                                </a>
                                <a href="" class="linkpop_b" style="text-decoration: none;">
                                    <div style="background-color: rgba(180,180,180,0.7); height: 50px; width: 200px; color: black; padding-top: 10px; text-decoration: none;">KATALOG</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php  //$no == 0 ? "active" : "" ?>
            <div class="carousel-item ">
                <!-- @app/web/uploads/ -->
                <img src="{{ url('/image/ac.jpg') }}" class="d-block" style="width: 100%; height: 90%;">
                <div class="carousel-caption">
                        <!-- <div class=''>
                            <h4>A</h4>
                            <p style='font-size: 16px;'>B</p>
                        </div> -->
                    <div class="bg-wrapper" style="width: 100%; text-decoration: none;">
                        <div class="container">
                            <div class="row justify-content-around">
                                <a href="" class="linkpop_a" style="text-decoration: none;">
                                    <div style="background-color: rgba(255,0,0,0.7); height: 50px; width: 200px; color: black; padding-top: 10px;">CUSTOM</div>
                                </a>
                                <a href="" class="linkpop_b" style="text-decoration: none;">
                                    <div style="background-color: rgba(180,180,180,0.7); height: 50px; width: 200px; color: black; padding-top: 10px; text-decoration: none;">KATALOG</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#platinum_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#platinum_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </div>
</div>