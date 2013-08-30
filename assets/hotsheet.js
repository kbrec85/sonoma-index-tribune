
new ZWidgets.widgets.EventList({
    id: "event_list",
    site:"http://events.sonomanews.com",
    partner_id:79,
    max_displayed:"5",
    show_images: true,
    image_width: 84,
    image_height: 84,
    width:"",
    height:"",
    vv:"",
    where_var:"",
    what_var:"",
    when_var:"",
    neighborhood:"",
    css: {
    },
    images:{
    },
    labels: {
        sponsored:"Sponsored"
    },
    load: {
        limit: 5,
        srss: 5,
        fields: "description,name,zurl,images,starttime,editors_pick",
        tag: zcat,   // global variable set in the textwidget that calls this script
        sponsored: false,
        where:"santa rosa, ca",
        radius:"30",
        v:"",
        what:"",
        when:"next 30 days",
        nbh:""
    },

    renderers: {
        renderEvent: function(event) {
            var zdate = this.renderDate(event);
            var zimg  = this.renderImage(event);
            var date = zdate;
            var date  = fixdate(zdate);             // text of date, format:  "Mar 13"
            var zname = this.renderEventName(event);
            var link  = extractlinkurl(zname);      // url of the event on Zvents
            var imgurl = extractimgurl(zimg);       // url of the thumgnail image
            var name  = event.name;                 // text of event name
            var desc  = event.description;          // text of event description
            var name  = trimname(name);             // shorten the name if it's overly long
            var slug  = trimdesc(date, name, desc);     // shorten the description to fit
            
            if (slug.length > 0) {
                date = date + ": ";
            } else {
                date = date + "<br />";
            }
            
        return ["\n\n", 
                '\n\n</ul>\n',
                '<div id="hotboxevent">\n',
                '<img src="', imgurl, '" width="84" height="84" align="left">\n',
                '<strong><a href="', link, '">', name, '</a><br />\n',
                '</strong><a href="', link, '"> More &raquo;</a>', 
                '</div>\n',
                '<ul>\n'].join('');
        }
    }

});

function fixdate(srcdate) {
    
    if (srcdate == "today")
        return "Today";
        
    if (srcdate == "tomorrow")
        return "Tomorrow";
    
    var mnum = srcdate.split("/")[0];       // month before the slash
    var dnum = srcdate.split("/")[1];       // day after
    
    if ((mnum.length > 2) || (dnum.length != 2))  // just in case we get something unexpected...
        return "Soon";
    
    if (dnum.charAt(0) == "0")              // days under 10 are formatted "06" so
        dnum = dnum.substr(1,1);            //    remove the leading zero
    
    var months = new Array("Zzz", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

    var retdate = [months[mnum], ' ', dnum].join('');

    return retdate;
}

function extractimgurl(srcimg) {
    
    var tag, url, spot, len;
    
    if(srcimg.length < 4){          // if no image, src is null - use a stock thumbnail
        tag = zcat;
        if(tag.indexOf(",") != -1) {        // if there's more than one tag separated by commas,
            tag = tag.substr(0, tag.indexOf(","));   // use the first tag in the list
        }
        tag = tag.substr(3);        // remove the "707" from the tag we want
        url = "http://img.pressdemocrat.com/zvents/zv" + tag + "sit.jpg";  // make the tag specific image URL
    } else {
        url = srcimg.split("<")[2];  // find tag w/ image
        spot = url.indexOf("src=") + 5;  // find start of image
        url = url.substr(spot);   //  snip to start
        len = url.indexOf("\"");   // find end of url (closed by a quote)
        url = url.substr(0, len);   // snip to end
        url = url + "scaled";
    }

    return url;
}

function extractlinkurl(srctag) {
    
    var url = srctag;               // first tag
    var spot = url.indexOf("http:");   // start of url
    var url = url.substr(spot);   //  snip to start
    var len = url.indexOf("\"");   // find end of url (closed by a quote)
    url = url.substr(0, len);   // snip to end
    
    return url;
}

function trimname(srcname) {
    
    var name, spot;     
    var target = 34;                // generally three and a half lines (leave room for "More>>>")
        
    if (srcname.length > target) {
        name = srcname.substr(0, target);  // first, lop for max length
        while(name.substr(name.length - 1,1) != " "){       // until it terminates in a space
            name = name.substring(0, name.length - 1);      // lop one char off the end and try again
        }
        name = name.substring(0, name.length - 1);      // lop off that trailing space
        name = name + "...";                            // replace it with an ellipse
    }
    else {
        name = srcname;
    }
    
    return name;
}

function trimdesc(date, name, longdesc) {
    
    var desc, spot;     
    var target = 55;                // generally three and a half lines (leave room for "More>>>")
    if (name.length < 20)           // if the title is only one line
        target = target + 20;       // we get one more line of description!
        
    if(date == "Today") target--;
    
    if(date == "Tomorrow") target = target - 3;
    
    if (longdesc.length > target) {
        desc = longdesc.substr(0, target);  // first, lop for max length
        while(desc.substr(desc.length - 1,1) != " "){       // until it terminates in a space
            desc = desc.substring(0, desc.length - 1);      // lop one char off the end and try again
        }
        desc = desc.substring(0, desc.length - 1);      // lop off that trailing space
        desc = desc + "...";                            // replace it with an ellipse
    }
    else {
        desc = longdesc;
    }
    
    return desc;
}
