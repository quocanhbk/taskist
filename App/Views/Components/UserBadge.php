<div class="dropdown ms-auto">
    <div class="d-flex ms-auto bg-light py-2 px-3 rounded-pill align-items-center dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
        <div class="border rounded-circle overflow-hidden" style="width: 2rem; height: 2rem">
            <object data="<?= $user["avatar"] ?>" type="image/png" style="width: 100%; height: 100%;">
                <img src="/assets/default-avatar.png" alt="avatar" class="rounded-circle"
                    stylle="width: 100%; height: 100%">
            </object>
        </div>
        <div class="ms-2"><?= $user["username"] ?></div>
    </div>
    <div class="dropdown-menu w-100">
        <a class="dropdown-item py-2" href="/profile">Profile</a>
        <form action="/logout" method="POST">
            <button class="dropdown-item py-2 text-danger" type="submit">Logout</button>
        </form>
    </div>
</div>