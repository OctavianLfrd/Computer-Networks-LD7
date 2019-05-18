<script>
    function hideMouseOver(el) {
        el.style.color = "#222";
    }
    function hideMouseLeave(el) {
        el.style.color = "#444";
    }
    function hideClick(el) {
        document.getElementById("control-menu").style.display = "none";
        document.getElementById("control-button").style.display = "block";
    }
    function showClick(el) {
        document.getElementById("control-button").style.display = "none";
        document.getElementById("control-menu").style.display = "block";
    }
</script>

<div id="control-button" class="controls" style="display: none">
    <button class="btn btn-outline-secondary" onclick="showClick(this)">Show options</button>
</div>

<div id="control-menu" class="controls card bg-secondary" style="display: none;">
  <div class="card-header">
      <div class="row">
          <div class="col  text-white">
              Options
          </div>
          <div class="col text-right text-white" onselectstart="return false">
              <span style="color: #444; cursor: pointer;" onmouseover="hideMouseOver(this)"
                                                          onmouseleave="hideMouseLeave(this)"
                                                          onclick="hideClick(this)">Hide</span>
          </div>
      </div>
  </div>
    <div class="card-body button-group-vertical">
        <button class="btn btn-secondary">
            Comment that work
        </button>
        <button class="btn btn-secondary">
            View all comments
        </button>
    </div>
</div>
