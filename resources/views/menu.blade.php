
<div id="content">
    <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>
    <div id="menu" class="nav">
      <div>
        <img class="nav-bg" src="/images/side-menu/sideNavBG.svg" alt="bg"></img>
      </div>
      <a href="#home" class="close" onclick="closeSlideMenu()">
        <img src="/images/side-menu/close.svg" alt="close" width="23"></img>
      </a>
      <div>
        <img class="nav-logo" src="/images/logo-header/logoHeader.svg" alt="logo"></img>
      </div>
      <div class="nav-text">
        <a onclick="closeSlideMenu()" class="l" href="#home">
          <span>Home /</span>
        </a>
        <a onclick="closeSlideMenu()" class="l" href="#about">
          <span>About me /</span>
        </a>
        <a onclick="closeSlideMenu()" class="l" href="#Portfolio">
          <span>Portfolio /</span>
        </a>
        <a onclick="closeSlideMenu()" class="l" href="#Contact">
          <span>Contact /</span>
        </a>
      </div>
      <div class="slide-contact">
        <a href="tel:+351 962 350 734" title="ligar">
          <span class="slide-number">+(351) 962 350 734</span>
        </a>
        <a href="mailto:diogosantana1997@outlook.pt?subject=E-mail site" title="Enviar e-mail">
          <span class="slide-email">diogosantana1997@outlook.pt</span>
        </a>
      </div>
      <div class="nav-cv">
        <span class="inline">
          <a href="images/CV.pdf" title="download cv" download>
            <span class="slide-cv">
              <i class="fas fa-long-arrow-alt-right "></i>
            <span class="fontowesome-padding">curriculum vitae</span>
            </span>
          </a>
        </span>
      </div>
      <div class="nav-socials">
        <ul>
          <li>
            <a href="mailto:diogosantana1997@outlook.pt?subject=E-mail site" title="Enviar e-mail">
              <i class="fas fa-envelope"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/DiogoSantanaa" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a
              href="https://www.linkedin.com/in/diogo-santana-2ab871187/"
              target="_blank"
            >
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

 
  <script>
      function openSlideMenu() {
          document.getElementById("menu").style.width = "100%";
          document.getElementById("content").style.marginLeft = "100%";
      }
      function closeSlideMenu() {
          document.getElementById("menu").style.width = "0";
          document.getElementById("content").style.marginLeft = "0";
      }

  </script>
