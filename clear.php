
<div id="example1" class="col-3 bg-info border text-secondary h5 border-accent1 rounded-2 mt-4 p-2" hx-swap-oob="true"></div>

<div id="example1" class="col-3" hx-swap-oob="true"></div>

<div id="test1" class="" hx-swap-oob="true"></div>

<div id="test2" class="" hx-swap-oob="true"></div>

<div id="clear" class="col-3" hx-swap-oob="true">
  <button
  class="btn btn-sm btn-primary mt-2"
  hx-get="clear.php"
  hx-trigger="click"
  hx-swap="innerHTML"
  hx-vals='{"myVal": "My Value"}'
  > Clear </button>
</div>

