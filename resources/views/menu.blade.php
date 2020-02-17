
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
          <a href="/static/media/CV.b97d044e.pdf" title="download cv" download="">
            <span class="slide-cv">
              <svg class="svg-inline--fa fa-long-arrow-alt-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>
              </svg><span class="fontowesome-padding">curriculum vitae</span></span></a></span>
      </div>

      <div class="nav-socials">
        <ul>
          <li>
            <a onclick="closeSlideMenu()" href="#Contact" title="Enviar e-mail">
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
