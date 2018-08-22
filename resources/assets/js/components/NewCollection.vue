<template>
        <section class="new-collection">
            <h4 class="heading"><strong>NEW COLLECTION</strong></h4>
            <div class="grid-x">
                <div class="medium-offset-1 small-12 medium-4">

                    <div class="card collection-1 bitmap">
                        <div class="card-text">
                            <span class="in-text"> Sanitary </span><br>
                            <span class="bold-text">Bidet</span>
                        </div>

                    </div>
                </div>
                <div class="small-12 medium-6">
                    <div class="grid-x">
                        <div class="card collection-1 bit-side"
                             style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('./images/rice.png');">
                            <div class="card-text">
                                <span class="in-text"> Sanitary </span><br>
                                <span class="bold-text">Bathtubs</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-x">
                        <div class="small-6 medium-7">
                            <div class="card collection-1 bit-side"
                                 style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('./images/tiles.png');">
                                <div class="card-text">
                                    <span class="in-text" style=""> Tiles </span><br>
                                    <span class="bold-text">Ceramic Tiles</span>
                                </div>
                            </div>
                        </div>
                        <div class="small-6 medium-5">
                            <div class="card collection-1 bit-side"
                                 style="background-image: linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('./images/door.png');">
                                <div class="card-text">
                                    <span class="in-text" > Door </span><br>
                                    <span class="bold-text">Flush Door</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "NewCollection",

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
