<x-admin-dashboard title='Dashboard' dashTitle='Dashboard'>
    <div class="container">
       <div class="row my-4">
           <div class="col-md-3">
               <div class="card-counter info">
                   <i class="fa fa-users"></i>
                   <span class="count-numbers">{{ $membersCount }}</span>
                   <span class="count-name">Membres</span>
               </div>
           </div>
           <div class="col-md-3">
               <div class="card-counter success">
                   <i class="fa fa-list"></i>
                   <span class="count-numbers">{{ $categoriesCount }}</span>
                   <span class="count-name">Categories</span>
               </div>
           </div>
       </div>
        <h1>{{ $membersChart->options['chart_title'] }}</h1>
        {!! $membersChart->renderHtml() !!}

        <h1>{{ $incomeChart->options['chart_title'] }}</h1>
        {!! $incomeChart->renderHtml() !!}

        {!! $membersChart->renderChartJsLibrary() !!}
        {!! $incomeChart->renderJs() !!}
        {!! $membersChart->renderJs() !!}
    </div>
</x-admin-dashboard>
