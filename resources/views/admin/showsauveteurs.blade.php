
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show sauveteurs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('sauveteurs.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom:</strong>
            <span>{{ $sauveteurs->nom }}</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prénom:</strong>
            <span>{{ $sauveteurs->prenom }}</span>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age:</strong>
            <span>{{ $sauveteurs->age }}</span>
        </div>
    </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date de naissance:</strong>
            <span>{{ $sauveteurs->datedenaissance }}</span>
        </div>
    </div>
</div>
