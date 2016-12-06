<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">DonateTRACK</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('contacts') }}">Contacts</a></li>
        <li><a href="{{ url('donations') }}">Donations</a></li>
        <li><a href="{{ url('items') }}">Items</a></li>
        <li><a href="{{ url('categories') }}">Categories</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">New Post <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">New Contact</a></li>
            <li><a href="#">New Donation</a></li>
            <li><a href="#">New Item</a></li>
            <li><a href="#">New Category</a></li>
          </ul>
        </li>
        <li><a href="#">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="btn btn-default">
              <i class="glyphicon glyphicon-plus"></i>
              Add Donation
            </a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
