function print_pdf(param, pagesize)
{
    var g = $(location).attr('href');
    var qx = g.replace(/^.*\/|\.[^.]*$/, '');
    //alert(g.replace(qx,'')+param);
    var url = encodeURIComponent(g.replace(qx, '') + param);
    if (pagesize)
    {
        window.open('http://172.2.200.12/report/tkreport/all_pdf_gen.php?url=' + url + '&page_size=' + pagesize);
    }
    else
    {
        window.open('http://172.2.200.12/report/tkreport/all_pdf_gen.php?url=' + url);
    }
}