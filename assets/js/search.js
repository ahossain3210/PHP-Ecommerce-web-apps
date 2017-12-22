
jQuery(document).ready(function ()
{
    jQuery('#search-area button').click(function ()
    {
        var return_bool = false;

        if (jQuery(this).hasClass('active') && jQuery('#search-area input').val().length !== 0)
        {
            return_bool = true;
        } else if (jQuery(this).hasClass('active') && jQuery('#search-area input').val().length === 0)
        {
            jQuery('#search-area input').animate(
                    {
                        width: '28px'
                    }, 350, 'easeOutExpo');

            jQuery('#search-area button').removeClass('active');

            return_bool = false;
        } else
        {
            jQuery(this).addClass('active');
            jQuery('#search-area input').animate(
                    {
                        width: '867px'
                    }, 350, 'easeOutExpo');

            return_bool = false;

        }
        return return_bool;
    });
});


       