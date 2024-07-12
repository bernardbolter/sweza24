(function($) {
    $(document).ready(function() {
        var linkHeight = 0
        var artInfoHeight
        getLinkHeight()
        getFooterPosition()
        getArtInfoHeight()
        setArtworkSizing()

        function getLinkHeight() {
            if ($(window).width() > 768) {
                linkHeight = 21
                $('#navigation').removeClass('navigation-open')
            } else {
                linkHeight = 31
            }
        }

        function getFooterPosition() {
            if ($("#pageContainer").height() > $(window).height()) {
               $('#footer').css({'position' : 'relative'}) 
            } else {
                $('#footer').css({'position' : 'fixed'}) 
            }
        }

        function getArtInfoHeight() {
            artInfoHeight = $('#artInfo').height()
            console.log(artInfoHeight)
            if ($(window).width() > 768) {
                $('#artworkContainer').css({ 'padding-top': `${artInfoHeight}px` })
            } else {
                $('#artworkContainer').css({ 'padding-top': `0px` })
            }
        }

        function setArtworkSizing() {
            var artworkContainers = $('.artwork-container')
            console.log('art size: ', artInfoHeight)

            artworkContainers.map((i,art) => {
                if ($(window).width() > 768) {
                    var Height = $(art).height()
                    var Width = $(art).width()
                    if (Height > Width) {
                        $(art).css({ height : `calc(100vh - ${artInfoHeight + 85}px)` })
                    } else {
                        // $(art).addClass('desktop-art-landscape')
                        $(art).css({ height : `60vh` })
                    }                 
                } else {
                    $(art).css({ height: 'auto' })
                }
            })
        }

        $(window).resize(function() {
            getLinkHeight()
            getFooterPosition()
            getArtInfoHeight()
            setArtworkSizing()
        });

        if ($('#navWorkLinks').hasClass('custom-post')) {
            $('#navWorkLinks').css('max-height', `${php_vars.artwork_count * linkHeight}px`)
            $('#navWork').toggleClass('active') 
        }
        
        $('#navWork').on('click', () => {
            if ($('#navWork').hasClass('active')) {
                $('#navWorkLinks').css('max-height', 0)
            } else {
                $('#navWorkLinks').css('max-height', `${php_vars.artwork_count * linkHeight}px`)
            }
            $('#navWorkLinks').toggleClass('nav-links-show')
            $('#navWork').toggleClass('active')
            console.log(linkHeight)
            console.log(`${php_vars.artwork_count * linkHeight}px`)
            
        })

        if ($('#navVideosLinks').hasClass('custom-post')) {
            $('#navVideosLinks').css('max-height', `${php_vars.artwork_count * linkHeight}px`)
            $('#navVideos').toggleClass('active') 
        }

        $('#navVideos').on('click', () => {
            if ($('#navVideos').hasClass('active')) {
                $('#navVideosLinks').css('max-height', 0)
            } else {
                $('#navVideosLinks').css('max-height', `${php_vars.video_count * linkHeight}px`)
            }
            $('#navVideosLinks').toggleClass('nav-links-show')
            $('#navVideos').toggleClass('active')
            
        })

        $('#hamburger').on('click', () => {
            $('#hamburger').toggleClass('hamburger-open')
            $('#navigation').toggleClass('navigation-open')
        })

    })
})(jQuery);