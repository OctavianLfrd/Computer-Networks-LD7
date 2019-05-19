<script>
    function sendAnswer() {
        const client = document.getElementById("client-name").value;
        const text = document.getElementById("answer-text").value;
        const answerButton = document.getElementById("send-answer-button");
        const questionId = answerButton.getAttribute("data-question-id");
        $.ajax({
            method: "POST",
            url: `/questions/${ questionId }/answer/add`,
            data: {
                client,
                text
            },
            dataType: "json",
            success(response) {
                $("#answerModal").modal("hide");
                if (response) $("#answerSuccessModal").modal("show");
                else $("#answerFailModal").modal("show");
                setTimeout(_ => {
                    window.location.reload();
                }, 1000)
            },
            error() {
                $("#answerFailModal").modal("show");
            }
        });
    }
    function checkTheNumberOfSymbols(el) {
        let maxLength;
        if (el === document.getElementById("client-name")) maxLength = 15;
        else if (el === document.getElementById("answer-text")) maxLength = 200;

        if (el.value.length > maxLength) {
            el.value = el.value.substring(0, maxLength);
        }
    }
</script>
<div class="modal fade" id="answerModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="answerModalLabel">New answer</h5>
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
            <label for="answer-text" class="col-form-label">Text</label>
            <textarea class="form-control" id="answer-text" oninput="checkTheNumberOfSymbols(this)"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="send-answer-button" type="button" class="btn btn-primary" onclick="sendAnswer()">Send answer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade py-5" id="answerSuccessModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-success text-center" style="font-size: 20px;">
      The answer has been added successfully!
    </div>
  </div>
</div>

<div class="modal fade py-5" id="answerFailModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-danger text-center" style="font-size: 20px;">
      An error occured, answer has not been added!
    </div>
  </div>
</div>
