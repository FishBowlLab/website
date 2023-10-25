<table class='table table-stripped table-hover'>
    <thead>
        <tr>
            <th scope='col'>@sortablelink('#')</th>
            <th scope='col'>@sortablelink('Name')</th>
            <th scope='col'>@sortablelink('Component')</th>
            <th scope='col'>@sortablelink('Date')</th>
            <th scope='col'>@sortablelink('Status')</th>
            <th scope='col'>Actions</th>
        </tr>
    </thead>
    <tbody>
        {{$slot}}
    </tbody>
</table>