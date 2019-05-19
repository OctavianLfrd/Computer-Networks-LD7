<script>
    function hideMouseOver(el) {
        el.style.color = "#222";
    }
    function hideMouseLeave(el) {
        el.style.color = "#444";
    }
    function hideClick() {
        document.getElementById("control-menu").style.display = "none";
        document.getElementById("control-button").style.display = "block";
    }
    function showClick() {
        document.getElementById("control-button").style.display = "none";
        document.getElementById("control-menu").style.display = "block";
    }
    function goToViewComments() {
        let el = document.getElementById("view-all-comments-button");
        window.location = `/comments/${el.getAttribute('comment-id')}`;
    }
</script>

<div id="control-button" class="controls" style="display: none">
    <button class="btn btn-outline-secondary" onclick="showClick()">Show options</button>
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
                                                          onclick="hideClick()">Hide</span>
          </div>
      </div>
  </div>
    <div class="card-body button-group-vertical">
        <button class="btn btn-secondary" data-toggle="modal" data-target="#commentModal">
            Comment that work
        </button>
        <button id="view-all-comments-button" class="btn btn-secondary" onclick="goToViewComments()" data-comment-id="">
            View all comments
        </button>
    </div>
</div>
