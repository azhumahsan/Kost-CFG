<style>
    * {
        box-sizing: border-box;
        color: black;
        font-weight: 400;
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        padding: 0;
    }

    html {
        scroll-behavior: smooth;
        font-size: 1vw;
    }

    body {
        background-color: #F7F4E9;
        position: relative;
        overflow-x: hidden;
    }

    .hidden {
        display: none;
    }

    .secondary-color {
        color: #FF735B;
    }

    .bg-secondary-color {
        background-color: #FF735B;
    }

    .handwritten {
        font-family: 'Parisienne', cursive;
    }

    .cormorant {
        font-family: 'Cormorant', serif;
    }

    .sector {
        min-width: 100%;
        /* min-height: 100vh; */
    }

    .nav-link {
        font-weight: 700;
        color: black;
    }

    .nav-link:hover {
        color: #FF735B;
    }

    .border-bottom {
        border-bottom: 1px solid rgb(0, 0, 0) !important;
    }

    .border-start {
        border-left: 1px solid rgb(0, 0, 0) !important;
    }

    .h1 {
        font-size: 3.5rem;
        font-weight: 500;
    }

    .h2 {
        font-size: 3rem;
        font-weight: 500;
    }

    .h3 {
        font-size: 2.5rem;
        font-weight: 400;
    }

    .h4 {
        font-size: 2rem;
        font-weight: 400;
    }

    .h5 {
        font-size: 1.5rem;
        font-weight: 400;
    }

    .h6 {
        font-size: 1rem;
        font-weight: 400;
    }

    .nav {
        --mdb-nav-link-color: black;
        --mdb-nav-link-hover-color: black;
    }

    #wrapper-text-landing {
        margin-left: 10vw;
        margin-bottom: 5vh;
    }

    #box-img-landing {
        height: 51.25rem;
        max-width: 50vw;
        overflow: hidden;
    }

    .img-full-h {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #box-floating-order {
        top: 80%;
        left: 9%;
        transform: translate(0, 0);
        height: fit-content;
        width: fit-content;
    }



    .box-desc {
        display: flex;
        align-items: center;
        padding: 5% 15%;
        min-height: 100%;
    }

    .carousel-inner {
        height: fit-content;
        position: relative;
    }

    .carousel-item {
        height: 0;
        padding-bottom: 56.25%;
    }

    .carousel-item img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        min-height: 100%;
        object-fit: cover;
    }

    .car-button {
        width: 2.5rem;
        height: 2.5rem;
        background-color: transparent;
        border: none;
    }

    .car-button>i {
        font-size: 1.5rem;
    }

    .car-button>i::before {
        color: #FF735B;
        transition: 300ms all ease-in-out;
    }

    .car-button:hover>i::before {
        color: black;
        transition: 300ms all ease-in-out;
    }

    .car-sect {
        width: 100vw;
    }

    .book-grid {
        display: grid;
        grid-template-areas:
            'tall tall tall normal'
            'tall tall tall footer';
        gap: .8rem;
    }

    .grid-item {
        background-color: rgb(209, 209, 209);
        color: white;
        padding: 1rem;
        font-size: 1.5rem;
        min-height: 18vw;
        text-align: center;
        overflow: hidden;
    }

    .img-grids {
        object-fit: cover;
    }

    .item-tall {
        grid-area: tall;
        border-top-left-radius: 1rem;
        border-bottom-left-radius: 1rem;
    }

    .item-normal {
        grid-area: normal;
        border-top-right-radius: 1rem;
    }

    .item-footer {
        grid-area: footer;
        border-bottom-right-radius: 1rem;
    }

    .btn-to-detail:hover {
        background-color: rgba(0, 0, 0, .8);
        color: white;
    }

    .support-booking {
        padding: 2.5rem 0;
    }

    .support-shadow {
        /* offset-x | offset-y | blur-radius | spread-radius | color */
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2);
    }

    .wrapper-room-left {
        float: left;
    }

    .wrapper-room-right {
        float: right;
    }

    .order-card {
        background-color: #f8f9fa;
        padding: 1rem
    }

    .box-f-image {
        padding: 0 5rem;
        width: 18vw;
    }

    .box-f-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #mid-f-support {
        border-left: #FF735B 1px solid;
        border-right: #FF735B 1px solid;
    }

    #mid-f-support2 {
        border-left: #FFFFFF 1px solid;
        border-right: #FFFFFF 1px solid;
        margin: 0 2.5rem;
    }

    #alamat-footer {
        flex-grow: 10;
    }

    #facility-icon-title {
        margin: 6vw 0;
    }

    .btn-sosmed {
        display: inline;
        border-radius: 24px;
        border: .2rem solid #ffffff;
        color: #ffffff;
        width: 100%;
        padding: .6rem .4rem;
        margin: .4rem 0;
    }

    .btn-sosmed:hover,
    .btn-sosmed:hover>i::before {
        border-radius: 24px;
        background-color: rgba(255, 255, 255, .8);
        /* color: #000; */
        color: #ce1f00;
    }

    .support-bg-indicator {
        /* Gradient transparant into black */
        background-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 0),
                rgba(0, 0, 0, .8));
        width: 100%;
        height: 50%;
        bottom: 0;
        left: 0;
    }

    .carousel-indicators li {
        background-color: #FF735B !important;
        height: .8rem !important;
        width: .8rem !important;
        border-radius: 50%;
        margin: 0 .3rem !important;
    }

    .img-facility {
        width: 100%;
        /* Set the width of the container */
        height: 0;
        /* Set initial height to 0 */
        padding-bottom: 56.25%;
        /* Set the aspect ratio (9/16 = 0.5625 or 56.25%) */
        position: relative;
        /* Enable positioning for the container */
        overflow: hidden;
        /* Hide any overflow from the container */
    }

    .img-facility img {
        position: absolute;
        /* Position the image relative to the container */
        width: 100%;
        /* Set the width of the image to fill the container */
        height: 100%;
        /* Set the height of the image to fill the container */
        object-fit: cover;
        /* Maintain the aspect ratio and cover the container */
    }

    #contacts {
        width: 10%
    }

    /* Detail page (room/index.blade.php) */

    .btn-detail {
        border: 1px solid #FF735B;
        border-radius: 5px;
        background-color: #fff;
        color: #FF735B;
        width: 100%;
    }

    .btn-detail:hover {
        background-color: #FF735B;
        color: #fff;
    }

    .img-cover {
        object-fit: cover;
    }

    .disabled-btn {
        pointer-events: none;
        background-color: rgb(73, 73, 73);
        border: none;
        color: white;
    }

    #back-btn:hover, #back-btn:hover i {
        color: #000 !important;
    }

    @media only screen and (max-width: 1024px) {
        .h6 {
            font-size: 1.5rem;
        }

        .nav-link {
            font-size: 1.25rem;
        }

        #contacts {
            width: 15%
        }
    }

    @media only screen and (max-width: 767px) {
        html {
            font-size: 1.8vw;
        }

        .nav-link {
            font-size: 1rem;
        }

        #contacts {
            width: 20%
        }
    }
</style>
