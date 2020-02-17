<section id="Contact">
    <div class="container-fuild">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="h1-margin contact">
            <i class="icon waves">
              <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" version="1.1" id="Camada_1" x="0px" y="0px" viewBox="0 0 54 12" style="enableBackground: new 0 0 54 12" xmlSpace="preserve">
                <style type="text/css">
                    .st0{fill:none;stroke:#D85D5D;stroke-width:6;}
                </style>
                <path id="Caminho_2" class="st0" d="M2,8.29l7.66-4.58l7.01,4.58l9.81-4.58l9.34,4.58l8.13-4.58L52,8.29"></path>
              </svg>
            </i>
            <span class="title-first">
              Con <br>
              <span class="title-second">
                tact <span class="title-bar">/</span>
              </span>
            </span>
          </h1>
        </div>
      </div>
      <div class="email">
        <form name="form" id="form" method="POST" action="/#Contact" >
            @csrf
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input placeholder="Name :" name="name" id="name" type="text" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <span class="errorMessage">Minimum 3 characaters required</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="email" id="email" placeholder="Email :" type="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <span class="errorMessage">Invalid email address</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input name="subject" id="subject" placeholder="Subject :" type="text" class="form-control" value="{{ old('subject') }}">
                @error('subject')
                    <span class="errorMessage">Minimum 5 characaters required</span>
                @enderror
            </div>
            <div class="form-group">
                <input name="message" id="message" placeholder="Message :" type="text" class="form-control" value="{{ old('message') }}">
                @error('message')
                    <span class="errorMessage">Minimum 50 characaters required</span>
                @enderror
            </div>
            <div class="text-right form-group">
                <button type="submit" class="btn btn-secondary">Send &gt;&gt;</button>
            </div>

            @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> {{ session('message') }}
                    <button type="button" class="closeInfo close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            @endif
        </form>
      </div>
    </div>
  </section>