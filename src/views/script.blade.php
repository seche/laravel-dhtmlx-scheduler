<script>
    var scheduler_{{ $id }};
    document.addEventListener('DOMContentLoaded', function() {
        scheduler_{{ $id }} = Scheduler.getSchedulerInstance();

        scheduler_{{ $id }}.config = {!! $options !!};


        scheduler_{{ $id }}.init('scheduler_{{ $id }}',new Date(2019,5,30),"week");
        //scheduler_{{ $id }}.load("/data/events")
    });
</script>
