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
    font-size: 18px;
  }
  body {
    background-color: #F7F4E9;
    position: relative;
    overflow-x: hidden;
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
  #head-content {
    height: 45.7rem;
  }
  #text-landing {
    top: 17%;
    left: 18%;
  }
  #box-img-landing {
    top: 0;
    left: 50%;
    transform: translate(0, 0);
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
    top: 32%;
    left: 9%;
    transform: translate(0, 0);
    height: fit-content;
    width: fit-content;
  }
  .box-desc {
    display: flex;
    align-items: center;
    padding: 5% 15%;
    min-height: 300px;
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
    gap: .45rem;
  }
  .grid-item {
    background-color: rgb(209, 209, 209);
    color: white;
    padding: 1rem;
    font-size: 1.5rem;
    min-height: 300px;
    text-align: center;
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
    padding: 3rem 0;
  }
</style>