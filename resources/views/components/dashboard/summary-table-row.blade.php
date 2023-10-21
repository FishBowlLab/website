<tr>
    <th scope="row">{{$taskID}}</th>
    <td>{{$name}}</td>
    <td>{{$component}}</td>
    <td>{{$timestamp}}</td>
    <td><span class='badge rounded-pill bg-{{$statusColour}}'>{{$status}}</span></td>
    <td>
        <!--eye, garbage, email-->
        <a class='icon-link icon-link-hover px-2' href='#' >
            <i class="fa-solid fa-eye" data-bs-toggle="tooltip" data-bs-placement="top" title="Watch"></i>
        </a>
        <a class='icon-link icon-link-hover px-2' href='#'>
            <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"></i>
        </a>
        <a class='icon-link icon-link-hover px-2' href='#'>
            <i class="fa-regular fa-envelope" data-bs-toggle="tooltip" data-bs-placement="top" title="Email"></i>
        </a>
    </td>
</tr>