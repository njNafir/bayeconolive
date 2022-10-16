{{-- 
<li class="treeview">
  <a href="#">
    <i class="fa fa-pie-chart"></i>
    <span>Courses</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
        <li class="{{ Request::is('admin/packageCategories*') ? 'active' : '' }}">
            <a href="{{ route('admin.packageCategories.index') }}"><i class="fa fa-edit"></i><span>Course Categories</span></a>
        </li>

        <li class="{{ Request::is('admin/packages*') ? 'active' : '' }}">
            <a href="{{ route('admin.packages.index') }}"><i class="fa fa-edit"></i><span>Our Courses</span></a>
        </li>
  </ul>
</li>

 --}}

 

<li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}">
    <a href="{{ route('admin.sliders.index') }}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>


{{-- <li class="{{ Request::is('admin/testimonials*') ? 'active' : '' }}">
    <a href="{{ route('admin.testimonials.index') }}"><i class="fa fa-edit"></i><span>Testimonials</span></a>
</li>

<li class="{{ Request::is('admin/faqs*') ? 'active' : '' }}">
    <a href="{{ route('admin.faqs.index') }}"><i class="fa fa-edit"></i><span>Faqs</span></a>
</li>

<li class="{{ Request::is('admin/pages*') ? 'active' : '' }}">
    <a href="{{ action('AdminPageController@index') }}"><i class="fa fa-edit"></i><span>Pages</span></a>
</li>

<li class="{{ Request::is('admin/page_categories*') ? 'active' : '' }}">
    <a href="{{ action('AdminPageCategoryController@index') }}"><i class="fa fa-edit"></i><span>Page Categories</span></a>
</li> --}}

<li class="{{ Request::is('admin/partners*') ? 'active' : '' }}">
    <a href="{{ route('admin.partners.index') }}"><i class="fa fa-edit"></i><span>Partners</span></a>
</li>


<li class="{{ Request::is('admin/blogs*') ? 'active' : '' }}">
    <a href="{{ route('admin.blogs.index') }}"><i class="fa fa-edit"></i><span>Blogs</span></a>
</li>
{{-- 
<li class="{{ Request::is('admin/menus*') ? 'active' : '' }}">
    <a href="{{ url('admin/menus') }}"><i class="fa fa-edit"></i><span>Menus</span></a>
</li>

--}}


<li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
    <a href="{{ route('admin.users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

{{-- <li class="{{ Request::is('admin/roles*') ? 'active' : '' }}">
    <a href="{{ route('admin.roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li> --}}


{{-- <li class="{{ Request::is('admin/notices*') ? 'active' : '' }}">
    <a href="{{ route('admin.notices.index') }}"><i class="fa fa-edit"></i><span>Notice</span></a>
</li>

<li class="{{ Request::is('admin/liveClasses*') ? 'active' : '' }}">
    <a href="{{ route('admin.liveClasses.index') }}"><i class="fa fa-edit"></i><span>Live Class</span></a>
</li>


<li class="{{ Request::is('admin/homeWorks*') ? 'active' : '' }}">
    <a href="{{ route('admin.homeWorks.index') }}"><i class="fa fa-edit"></i><span>Home Work</span></a>
</li>

<li class="{{ Request::is('admin/classNotes*') ? 'active' : '' }}">
    <a href="{{ route('admin.classNotes.index') }}"><i class="fa fa-edit"></i><span>Class Notes English</span></a>
</li>


<li class="{{ Request::is('admin/duas*') ? 'active' : '' }}">
    <a href="{{ route('admin.duas.index') }}"><i class="fa fa-edit"></i><span>Dua/ Masayel English</span></a>
</li>


<li class="{{ Request::is('admin/questions*') ? 'active' : '' }}">
    <a href="{{ route('admin.questions.index') }}"><i class="fa fa-edit"></i><span>Islamic Question & Answer</span></a>
</li>


<li class="{{ Request::is('admin/manners*') ? 'active' : '' }}">
    <a href="{{ route('admin.manners.index') }}"><i class="fa fa-edit"></i><span>Islamic Manners</span></a>
</li>


<li class="{{ Request::is('admin/quranAdults*') ? 'active' : '' }}">
    <a href="{{ route('admin.quranAdults.index') }}"><i class="fa fa-edit"></i><span>Quran for Adult ( Bangla)</span></a>
</li>

<li class="{{ Request::is('admin/quranKids*') ? 'active' : '' }}">
    <a href="{{ route('admin.quranKids.index') }}"><i class="fa fa-edit"></i><span>Quran for Child (English)</span></a>
</li>

<li class="{{ Request::is('admin/students*') ? 'active' : '' }}">
    <a href="{{ route('admin.students.index') }}"><i class="fa fa-edit"></i><span>Student profile</span></a>
</li>

<li class="{{ Request::is('admin/teachers*') ? 'active' : '' }}">
    <a href="{{ route('admin.teachers.index') }}"><i class="fa fa-edit"></i><span>Teachers profile</span></a>
</li>





<li class="{{ Request::is('admin/sections*') ? 'active' : '' }}">
    <a href="{{ route('admin.sections.index') }}"><i class="fa fa-edit"></i><span>Section</span></a>
</li>

<li class="{{ Request::is('admin/batches*') ? 'active' : '' }}">
  <a href="{{ route('admin.batches.index') }}"><i class="fa fa-edit"></i><span>Batch</span></a>
</li>

<li class="{{ Request::is('admin/channels*') ? 'active' : '' }}">
    <a href="{{ route('admin.channels.index') }}"><i class="fa fa-edit"></i><span>Channel Naba</span></a>
</li>





<li class="{{ Request::is('admin/permissions*') ? 'active' : '' }}">
    <a href="{{ route('admin.permissions.index') }}"><i class="fa fa-edit"></i><span>Permissions</span></a>
</li>

<li class="{{ Request::is('admin/countries*') ? 'active' : '' }}">
    <a href="{{ route('admin.countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

 --}}


<li class="{{ Request::is('admin/contacts*') ? 'active' : '' }}">
    <a href="{{ route('admin.contacts.index') }}"><i class="fa fa-edit"></i><span>Contacts</span></a>
</li>


<li class="{{ Request::is('admin/galleries*') ? 'active' : '' }}">
    <a href="{{ route('admin.galleries.index') }}"><i class="fa fa-edit"></i><span>Galleries</span></a>
</li>

<li class="{{ Request::is('admin/members*') ? 'active' : '' }}">
    <a href="{{ route('admin.members.index') }}"><i class="fa fa-edit"></i><span>Members</span></a>
</li>












<li class="{{ Request::is('admin/investors*') ? 'active' : '' }}">
    <a href="{{ route('admin.investors.index') }}"><i class="fa fa-edit"></i><span>Investors</span></a>
</li>

<li class="{{ Request::is('admin/settings*') ? 'active' : '' }}">
    <a href="{{ route('settings') }}"><i class="fa fa-edit"></i><span>Settings</span></a>
</li> 