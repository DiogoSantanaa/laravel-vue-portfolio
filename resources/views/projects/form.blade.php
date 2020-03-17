
<div class="form-group">
    <label for="name">name</label>
  
    <input name="name" type="text" class="form-control" 
        id="name" aria-describedby="nameHelp" placeholder="Enter name"
        value="{{ old('name', $project->name ?? '')  }}">
    <small id="nameHelp" class="form-text text-muted"></small>
    

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="socialDenomionation">Social Denomionation</label>
    
    <input name="social_denomination" type="text" class="form-control"
        id="socialDenomination" aria-describedby="socialDenominationHelp" placeholder="Enter Social Denomination"
        value="{{ old('social_denomination',$project->social_denomination ?? '') }}">
    <small id="socialDenominationHelp" class="form-text text-muted"></small>

    @error('socialDenomination')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="nif">Insert NIF</label>
    <input name="nif" type="number" class="form-control" 
        id="nif" aria-describedby="nifHelp" placeholder="Enter NIF"
        value="{{ old('nif', $project->nif ?? '') }}">
    <small id="nifHelp" class="form-text text-muted"></small>

    @error('nif')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="typeCompany">Insert Type Company</label>
    
    <select name="type_company" class="form-control" id="typeCompany" aria-describedby="typeCompanyHelp">
            
            @if(isset($project) && $project->type_company)
            <option value="{{ $project->type_company }}" selected>{{ $project->typeCompanyPreview }}</option>
            @else
            <option value disabled selected hidden>Select something...</option>
            @endif

            <option value="fornecedor">Fornecedor</option>
            <option value="transportador">Transportador</option>
            <option value="cliente">Cliente</option>

    </select>
    <small id="typeCompanyHelp" class="form-text text-muted"></small>  

    @error('typeCompany')
        <small class="text-danger">{{ $message }}</small> 
    @enderror
</div>

<button type="submit" class="btn btn-primary">Save</button>

