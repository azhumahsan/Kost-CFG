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
        font-size: .8vw;
    }

    body {
        width: 768px;
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

    .poppins {
        font-family: 'Poppins', sans-serif;
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

    #ext-auth {
        position: relative;
        display: block;
        height: 8vw;
        padding: 0 12vw;
    }

    .buttons-auth {
        height: 6rem;
        margin: 0 1rem;
    }

    .label-forms {
        font-family: 'Poppins', sans-serif;
        width: fit-content;
        transform: translateY(.6rem)
    }

    .navbar-brand {
        height: 8rem;
    }

    .form-wrap {
        width: 80%;
        margin: auto;
    }

    .cast-shadow {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn-sub {
        background-color: #FF735B;
        color: white;
    }

    .btn-sub:hover {
        background-color: #F7F4E9;
        color: black;
    }

    .is-invalid, .is-invalid:focus, .is-invalid:invalid {
      box-shadow: none;
    }

    input.form-control {
        border: none;
        border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        border-radius: 0;
        padding-bottom: auto;
        padding-left: 0;
        padding-right: 0;
    }

    input.form-control:focus {
        box-shadow: none;
        border: none;
        border-bottom: 2px solid #FF735B;
    }

    .btn-log {
        transition: all .3s ease-in-out;
    }

    .btn-log:hover {
        color: black;
        transition: all .3s ease-in-out;
    }

    @media only screen and (max-width: 2560px) {
        html {
            font-size: 1vw;
        }

        #ext-auth {
            padding: 0 1rem;
        }

        .buttons-auth {
            height: 4rem
        }
    }

    @media only screen and (max-width: 1280px) {
        html {
            font-size: 1.4vw;
        }

        #ext-auth {
            padding: 0 1rem;
        }

        .buttons-auth {
            height: 4rem
        }
    }

    @media only screen and (max-width: 768px) {
        html {
            font-size: 2vw;
        }

        #ext-auth {
            padding: 0 18vw;
        }

        .buttons-auth {
            height: 3.5rem
        }
    }

    @media only screen and (max-width: 576px) {
        html {
            font-size: 3vw;
        }

        #ext-auth {
            padding: 0 18vw;
        }

        .buttons-auth {
            height: 3.5rem
        }
    }

</style>
