<script>
    function deleteanswer(el) {
        const id = el.getAttribute("data-answer-id");
        $.ajax({
            url: `/questions/${ id }/answer/delete`,
            method: "DELETE",
            data: {},
            success(response) {
                console.log(response);
                if (response) $("#deleteSuccessModal").modal("show");
                else if (response) $("#deleteFailModal").modal("show");
                setTimeout(_ => {
                    window.location.reload();
                }, 1000);
            },
            error() {
                $("#deleteFailModal").modal("show");
            },
            dataType: "json"
        });
    }
</script>
<button class="btn btn-danger btn-sm p-0"
        style="height: 32px; width: 32px; padding-top: 3px !important; padding-left: 1px !important;"
        title="Delete"
        data-answer-id="{{ $answer->id }}"
        onclick="deleteanswer(this)">
     <i class="material-icons">delete</i>
</button>

<div class="modal fade py-5" id="deleteSuccessModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-success text-center" style="font-size: 20px;">
      The answer has been deleted successfully!
    </div>
  </div>
</div>

<div class="modal fade py-5" id="deleteFailModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content text-danger text-center" style="font-size: 20px;">
      An error occured, answer has not been deleted!
    </div>
  </div>
</div>
