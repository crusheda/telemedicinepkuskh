<script id="isActiveSwitch" type="text/x-jsrender">        
<label class="switch switch-label switch-outline-primary-alt">
    <input name="is_active" data-id="{{:reported_to.id}}" class="switch-input is-active" type="checkbox" value="1" {{:checked}}>
    <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
</label>
</script>

<script id="viewDelIcons" type="text/x-jsrender">        
<button title="Delete" class="index__btn btn btn-ghost-danger btn-sm delete-btn" data-id="{{:id}}">
    <i class="cui-trash action-icon"></i>
</button>
<button title="View" class="index__btn btn btn-ghost-success btn-sm view-btn" data-id="{{:id}}">
    <i class="fa fa-eye action-icon"></i>
</button>
</script>
