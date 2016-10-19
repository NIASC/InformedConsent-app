<section class="container-fluid section">

<div class="col-xs-12 col-sm-offset-1 col-sm-10">
  <h1>{$site_data.section_name}</h1>
  {if !isset($success)}
  <form method="post" class="windraw">
    <div class="row">
      <div class="form-horizontal col-sm-6">
        <div class="form-group">
          <label for="email">{$language.email}</label>
          <input id="email" name="email" class="form-control" type="text">
          {if isset($error)}
            <div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{$error}</div>
          {/if}
        </div>
      </div>
    </div>
    <input type="submit" value="Remove" class="btn btn-link">
  </form>
  {else}
  <div class="alert alert-success">
    {$language.windraw_success}
  </div>
  <button class="btn btn-link" onclick="goBack()">{$language.back}</button>
  {/if}
</div>

</section>
