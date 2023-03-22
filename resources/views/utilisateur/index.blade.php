@extends('utilisateur.layouts.dashboard')
@section('dashboard')
<div class="content-wrapper">
    <div class="row">

      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h4 class="font-weight-bold mb-0">Formulaire de signalement</h4>
          </div>
          <div>
              <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                <i class="ti-clipboard btn-icon-prepend"></i>Historique
              </button>
          </div>
        </div>
      </div>
    </div>
        <div class="col-6 grid-margin stretch-card " style="margin: auto">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Veuiller remplir le formulaire</h4>
                <p class="card-description">
                </p>
                <form class="forms-sample">
                <div class="form-group">
                    <label for="exampleInputName1">Titre</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Titre du signalement">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Type</label>
                    <select class="form-control" id="exampleSelectGender">
                        <option>Materiel defaillant</option>
                        <option>Application</option>
                        <option>Probleme de connexion</option>
                        <option>Imprimante</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Ajouter un Valideur</label>
                  <select class="form-control" id="exampleSelectGender">
                      <option>DFC</option>
                      <option>DCF</option>
                      <option>DRH</option>
                      <option>DC</option>
                      <option>DCP</option>
                  </select>
              </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Description</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </form>
            </div>
            </div>
        </div>
</div>
@endsection