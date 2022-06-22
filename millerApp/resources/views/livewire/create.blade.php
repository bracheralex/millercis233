<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">New Contact</h3>
    </div>

    <div class="panel-body">
        <div class="form-inline">
            <div class="input-group">
               First Name
                <input wire:model="first_name" type="text" class="form-control input-sm">
            </div>

                 <div class="input-group">
               Last Name
                <input wire:model="last_name" type="text" class="form-control input-sm">
            </div>

                      <div class="input-group">
              Email
                <input wire:model="email" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                Phone Number
                <input wire:model="phone_number" type="text" class="form-control input-sm">
            </div>

            <div class="input-group">
                <br>
                <button wire:click="store()" class="btn btn-default">Save</button>
            </div>
        </div>
    </div>
</div>