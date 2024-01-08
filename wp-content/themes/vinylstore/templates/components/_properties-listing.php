<section class="properties-listing <?php the_sub_field( 'padding_top' ); ?> <?php the_sub_field( 'padding_bottom' ); ?>">
    <div class="container">
        <?php if(get_sub_field('title')) { ?>
            <div class="textBlock" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-duration="800">
                <h3><?php the_sub_field('title'); ?></h3>
            </div>
        <?php } ?>
        <div class="filter">
            <span class="regions">
                <?php
                    $terms = get_terms( array(
                        'taxonomy' => 'region',
                        'hide_empty' => true
                    ));
                ?>
                <span>Region</span>
                <select id="regions">
                    <option value="all">All regions</option>
                    <?php foreach($terms as $term) { ?>
                        <option value="<?php echo $term -> slug; ?>"><?php echo $term -> name; ?></option>
                    <?php } ?>
                </select>
                <p class="error">Please select a region</p>
            </span>
            <span class="search">
                <a class="stdBtn">Search</a>
            </span>
        </div>
        <div class="inner"></div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/typesense@1/dist/typesense.min.js"></script>
<script>
    let client = new Typesense.Client({
        'nearestNode': {'host': 'hwg7bn8yup9zj51tp-1.a1.typesense.net', 'port': '443', 'protocol': 'https'},
        'nodes': [
            {'host': 'hwg7bn8yup9zj51tp-1.a1.typesense.net', 'port': '443', 'protocol': 'https'},
            {'host': 'hwg7bn8yup9zj51tp-2.a1.typesense.net', 'port': '443', 'protocol': 'https'},
            {'host': 'hwg7bn8yup9zj51tp-3.a1.typesense.net', 'port': '443', 'protocol': 'https'},
        ],
        'apiKey': 'lb1Z6n6Wa9EBuGduQWb25ZvHW9cWF7CI',
        'connectionTimeoutSeconds': 2
    })

    const perPage = 2;

    getDocuments("*", "1", "all");

    $(document).ready(function() {
        $(document).on("click",".pagination a",function(e) {
            e.preventDefault();
            pageNumber = $(this).attr('data-page');
            region = $("#regions").val();
            getDocuments("*", pageNumber, region);
            //console.log('test');
        });
        $('section.properties-listing .container .filter > span.search a').on('click', function(e) {
            e.preventDefault();
            region = $("#regions").val();
            //console.log(region);
            if(region.length === 0) {
                console.log('test');
                $('section.properties-listing .container .filter > span.regions p.error').addClass('active');
            } else {
                $('section.properties-listing .container .filter > span.regions p.error').removeClass('active');
                getDocuments("*", "1", region);
            }

        });
    });

    function getCurrentURL () {
        return window.location.href;
    }

    function getDocuments(query, page, region) {
        const getProperties = client.collections('property').documents().search({
            q : query,
            query_by : "post_title",
            sort_by : "post_datetime:desc",
            page: page,
            per_page : perPage,
            filter_by : "region:"+region
        })

        getProperties.then(function(results) {
            $('.inner').empty();
            properties = results.hits;
            //console.log(results);

            totalProperties = results.found;
            currentPage = results.page;
            totalPages = Math.ceil(totalProperties / perPage);

            for (var i = 0; i < properties.length; i++) {
                property = properties[i].document;
                //console.log(property);
                $('.inner').append('<a href="'+property.permalink+'" id="'+property.id+'" data-aos="fade-in" data-aos-anchor-placement="top-bottom" data-aos-duration="800"></a>');
                spanContent = $('.inner a#'+property.id);
                spanContent.append('<span class="image"><img src="'+property.post_thumbnail+'" /></span>');
                spanContent.append('<span class="title">'+property.post_title+'</span>');
            }

            // Pagination
            if(totalPages > 1) {
                const url = getCurrentURL()
                $('.inner').append('<div class="pagination"><span>Page '+currentPage+' of '+totalPages+'</div>');
                paginationContent = $('.inner .pagination');
                for (var i = 1; i <= totalPages; i++) {
                    if(currentPage == i) {
                        paginationContent.append('<span class="current">'+i+'</span>');
                    } else {
                        paginationContent.append('<span><a href="'+url+'?page='+i+'" data-page="'+i+'">'+i+'</a></span>');
                    }
                }
            }
        })
    }

</script>
