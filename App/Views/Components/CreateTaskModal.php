<div class="modal fade" id="create-task-modal" tabindex="-1" aria-labelledby="create-task-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create new task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add-task-form">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Description">
                    </div>
                    <div class="mb-3">
                        <label for="due_date" class="form-label">Due date</label>
                        <input type="date" class="form-control" id="due_date" placeholder="Due date">
                    </div>
                    <div id="form-error" class="alert alert-danger d-none" role="alert">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
const addTaskForm = document.getElementById("add-task-form");

addTaskForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const title = document.getElementById("title").value;
    const description = document.getElementById("description").value;
    const dueDate = document.getElementById("due_date").value;

    const formError = document.getElementById("form-error");

    const errors = []

    if (title === "")
        errors.push("Title is required");

    if (title.length > 255)
        errors.push("Title must be less than 255 characters");

    if (errors.length > 0) {
        formError.classList.remove("d-none");
        formError.innerHTML = errors.join("<br>");
        return;
    }

    formError.classList.add("d-none");

    const data = {
        title,
        description,
        due_date: dueDate
    };

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            $task_id = JSON.parse(this.responseText).data.id;
            // close modal
            const modal = bootstrap.Modal.getInstance(document.getElementById("create-task-modal"));
            modal.hide();

            // reload
            window.location.reload();
        }
    };
    xhttp.open("POST", "/api/task", true);
    xhttp.setRequestHeader("Content-type", "application/json");
    xhttp.send(JSON.stringify(data));
})
</script>