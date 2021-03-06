<section>
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="h1-margin portfolio" id="Portfolio">
            <i class="icon waves">
              <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" version="1.1" id="Camada_1" x="0px" y="0px" viewBox="0 0 54 12" style="enableBackground: new 0 0 54 12" xmlSpace="preserve">
                <style type="text/css">
                    .st0{fill:none;stroke:#D85D5D;stroke-width:6;}
                </style>
                <path id="Caminho_2" class="st0" d="M2,8.29l7.66-4.58l7.01,4.58l9.81-4.58l9.34,4.58l8.13-4.58L52,8.29"></path>
              </svg>
            </i>
            <span class="title-first">
              Port <br>
              <span class="title-second">
                folio <span class="title-bar">/</span>
              </span>
            </span>
          </h1>
        </div>
      </div>

      <div class="row bar-padding">
        @forelse($projects as $project)
          <div class="col-lg-4 col-sm-12 col-xs-12 " id="modal_id">
              <div class="conteudo">
                <button  data-toggle="modal" data-target="#modal{{ $project->id }}">
                  <div class="conteudo-overlay"></div>
                  <img class="img-fluid" src="{{ $project->thumbnail }}" alt=""></img>
                  <div class="project-details fadeIn-bottom">
                    <i class="shape">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" version="1.1" id="Camada_1" x="0px" y="0px" viewBox="0 0 600 500" style="enableBackground: new 0 0 600 500" xmlSpace="preserve">
                        <style type="text/css">
                          .portfolio-svg{fill:#D85D5D;}
                        </style>
                        <path id="Caminho_8" class="portfolio-svg" d="M600,500V152L0,361.7V500H600z"></path>
                      </svg>
                    </i>
                    <h3 class="project-title">{{ $project->title }}</h3>
                    <p class="project-subtitle">{{ $project->description }}</p>
                    <p class="project-see">See project</p>
                  </div>
                </button>
              </div>
          </div> 
          <div class="modal fade"  id="modal{{ $project->id }}" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
            <div class="container-fluid modal-fluid">
              <div class="row">
                <div class="col-lg-12 text-right" >
                  <button type="button" class="icon close"  data-dismiss="modal" aria-label="Close">
                    <svg version="1.1" id="Camada_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" xml:space="preserve">
                      <style type="text/css">
                        .st1{fill:none;stroke:#707070;stroke-width:2;stroke-miterlimit:10;}
                      </style>
                      <line class="st1" x1="2.2" y1="2.2" x2="47.48" y2="47.48"></line>
                      <line class="st1" x1="2.2" y1="47.48" x2="47.48" y2="2.2"></line>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div>
              <div class="row modal-margin">
                <div class="col-lg-12">
                  <h2 class="h2-margin">
                    <i class="icon waves">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Camada_1" x="0px" y="0px" viewBox="0 0 54 12" xml:space="preserve">
                        <style type="text/css">
                          .st0{fill:none;stroke:#D85D5D;stroke-width:6;}
                        </style>
                        <path id="Caminho_2" class="st0" d="M2,8.29l7.66-4.58l7.01,4.58l9.81-4.58l9.34,4.58l8.13-4.58L52,8.29"></path>
                      </svg>
                    </i>
                    <span class="modal-title">{{ $project->title }} <span class="modal-title-bar">/</span>
                  </span>
                </h2>
              </div>
            </div>
            <div class="row modal-margin">
              <div class="col-lg-8 col-md-8 col-xs-12 description-margin">
                <h6 class="modal-description">{{ $project->body }}
                </h6>
              </div>
              <div class="col-lg-2 col-md-2 col-xs-12 description-margin">
                <h4 class="modal-technologies">technologies</h4>
                <ul class="a">
                  <li class="list-text text-left">
                    <span class="modal-technologies-bar">/ </span>{{ $project->technologies->name}}
                  </li>
                  <li class="list-text">
                    <span class="modal-technologies-bar">/ </span>{{ $project->technologiesCss->name }}
                  </li>
                  <li class="list-text">
                    <span class="modal-technologies-bar">/ </span>{{ $project->technologiesJs->name }}
                  </li>
                </ul>
                <a href="{{ $project->link }}" role="button" class="btn-demo" target="_blank" >Live Demo</a>
                {{-- <button href="{{ $project->link }}" class="btn-demo" target="_blank"  >Live Demo</button> --}}
                <br>
                <a href="{{ $project->github }}" role="button" class="btn-github" target="_blank" >GitHub Repo</a>
                {{-- <button class="btn-github" target="_blank" href="{{ $project->github }}" >GitHub Repo</button> --}}
              </div>
              <div class="col-lg-12 text-center">
                <div class="img-modal-margin">
                  <img class="img-fluid" src="{{ $project->gif }}" alt="Portfolio"></img>
                </div>
              </div>
            </div>    
          </div>
        </div>
        </div>
      </div>
      @empty
        <li>No Projects availabe</li>
        @endforelse
    </div>
  </div>
</section>