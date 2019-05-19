<script>
    function sendComment() {
        const client = document.getElementById("client-name").value;
        const text = document.getElementById("comment-text").value;
        const commentButton = document.getElementById("send-comment-button");
        $.ajax({
            method: "POST",
            url: `/comments/${ commentButton.getAttribute("work-id") }/add`,
            data: {
                client,
                text
            },
            dataType: "json",
            success(response) {
                $("#commentModal").modal("hide");
                if (response) $("#commentSuccessModal").modal("show");
                else $("#commentFailModal").modal("hide");
            }
        });
    }
    function checkTheNumberOfSymbols(el) {
        let maxLength;
        if (el === document.getElementById("client-name")) maxLength = 15;
        else if (el === document.getElementById("comment-text")) maxLength = 200;

        if (el.value.length > maxLength) {
            el.value = el.value.substring(0, maxLength);
        }
    }
</script>
<div class="modal fade" id="commentModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="commentModalLabel">New comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="client-name" class="col-form-label">Your name</label>
            <input type="text" class="form-control" id="client-name" oninput="checkTheNumberOfSymbols(this)">
          </div>
          <div class="form-group">
            <label for="comment-text" class="col-form-label">Text</label>
            <textarea class="form-control" id="comment-text" oninput="checkTheNumberOfSymbols(this)"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="send-comment-button" type="button" class="btn btn-primary" onclick="sendComment()" data-work-id="">Send comment</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade py-5" id="commentSuccessModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-success" style="font-size: 20px;">
      The comment has been added successfully!
    </div>
  </div>
</div>

<div class="modal fade py-5" id="commentFailModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-warning" style="font-size: 20px;">
      An error occured, comment has not been added!
    </div>
  </div>
</div>
