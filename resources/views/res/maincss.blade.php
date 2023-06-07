<style>* {
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
    padding: 0 6vw;
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

.img-facility {
    width: 100%;
}

.img-facility img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.btn-sosmed {
    display: inline;
    border-radius: 24px;
    border: 2px solid #ffffff;
    color: #ffffff;
    padding: 10px;
    width: 10rem
}

.btn-sosmed:hover {
    border-radius: 24px;
    background-color: #25D366;
    color: #ffffff;
    padding: 10px;
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

#contacts {
    width: 10%
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

</style>
