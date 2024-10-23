       
       <x-layouts.partials.header :title="$title"/>
        <x-layouts.partials.navbar/>
        <x-layouts.partials.sidebar/>       
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-bold">{{ $title }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><span class="text-primary">Dashboard</span></li>
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            {{-- isi konten disini  --}}
            <section class="content">
                <div class="container-fluid">

                       {{ $slot }}

                 </div><!-- /.container-fluid -->
            </section>
        
        <x-layouts.partials.footer />


