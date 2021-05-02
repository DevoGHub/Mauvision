<style media="screen">
  section{
    position: fixed;
    overflow:hidden;
    height: 100vh;
    width: 100vw;
    background-color: rgba(0,0,0,0);
    z-index: -100;
    margin: 0;
    padding: 0;
  }

  section .wave{
    position:absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-image: url('resources/wave.png');
  }

  section .wave1{
    animation: animate1 3s linear infinite;
    z-index:-100;
    opacity: 0.6;
    animation-delay: 0s;
    height: 50vh;
    background-size: 100vw 50vh;
  }

  section .wave2{
    animation: animate2 3s linear infinite;
    z-index:-101;
    opacity: 0.6;
    animation-delay: 0s;
    height: 51vh;
    background-size: 100vw 51vh;
  }

  section .wave3{
    animation: animate1 5s linear infinite;
    z-index:-102;
    opacity: 0.4;
    animation-delay: -4s;
    height: 52vh;
    background-size: 100vw 52vh;
  }

  section .wave4{
    animation: animate2 5s linear infinite;
    z-index:-103;
    opacity: 0.2;
    animation-delay: -2s;
    height: 53vh;
    background-size: 100vw 53vh;
  }

  @keyframes animate1{
    0%{
      background-position-x: 0;
    }

    100%{
      background-position-x: 100vw;
    }
  }

  @keyframes animate2{
    0%{
      background-position-x: 100vw;
    }

    100%{
      background-position-x: 0;
    }
  }

  @media (orientation:portrait){
    section .wave1{
      height: 30vh;
      background-size:100vw 30vh;
    }
    section .wave2{
      height: 31vh;
      background-size:100vw 31vh;
    }
    section .wave3{
      height: 32vh;
      background-size:100vw 32vh;
    }
    section .wave4{
      height: 33vh;
      background-size:100vw 33vh;
    }
  }
</style>
<section>
  <div class="wave wave1">

  </div>
  <div class="wave wave2">

  </div>
  <div class="wave wave3">

  </div>
  <div class="wave wave4">

  </div
</section>
