
$(function () {

    const $box = $(".box"),
        $ul = $box.children("ul"),
        $li = $box.children("ul").children(),
        $ol = $ul.next("ol"),
        $btn = $ol.next("#btn"),
        $btnLeft = $btn.children(".btnLeft"),
        $btnRight = $btn.children(".btnRight")

    // 获取图片张数和每张图片的宽度
    let num = $li.length
    let width = $li.eq(0).outerWidth()

    // 把第0张图片追加到最后
    $ul.append($li.eq(0).clone())

    // 给ul添加宽度
    $ul.width((num + 1) * width)

    // 自动轮播
    auto()

    /*------------------------小圆点-----------------------------*/
    //创建小圆点
    for (let i = 0; i < num; i++) {
        $("<li>").addClass(i === 0 ? "active" : "").appendTo($ol)
    }

    // 定义当前和上一张图片的索引
    let index = 0
    let lastIndex = 0

    // ul的运动状态，默认为静止
    let isMove = false

    // 点击小圆点切换图片
    // ol下的li
    let olis = $ol.children()
    olis.on("click", function () {
        if (isMove) {
            return
        }
        isMove = true
        // 该this指向当前点击的小圆点，是原生，要转为jQuery
        // 先记录上一个索引
        lastIndex = index
        index = $(this).index()
        // 移除所有li的active
        olis.eq(lastIndex).removeClass("active")
        olis.eq(index).addClass("active")


        // 图片跟着小圆点一起切换
        $ul.animate({
            left: -index * width
        }, 1000, function () {
            isMove = false
        })

    })

    /*-----------------------右箭头-----------------------*/
    $btnRight.on("click", function () {
        if (isMove) {
            return
        }
        isMove = true
        // 判断是否到最后一张图片
        lastIndex = index
        index++
        if (index > num - 1) {
            $ul.animate({
                left: -index * width
            }, 1000, function () {
                index = 0
                $ul.css("left", 0)
                isMove = false
            })
        } else {
            $ul.animate({
                left: -index * width
            }, 1000, function () {
                isMove = false
            })
        }
        olis.eq(lastIndex).removeClass("active")
        olis.eq(index).addClass("active")
    })

    /*----------------------------左箭头---------------------*/
    $btnLeft.on("click", function () {
        // 判断是否到第一张图片
        if (isMove) {
            return
        }
        isMove = true
        lastIndex = index
        index--
        // 这时的index是一个负数
        if (index < 0) {
            index = num - 1
            $ul.css("left", -num * width).animate({
                left: -index * width
            }, 1000, function () {
                isMove = false
            })
        } else {
            $ul.animate({
                left: -index * width
            }, 1000, function () {
                isMove = false
            })
        }
        olis.eq(lastIndex).removeClass("active")
        olis.eq(index).addClass("active")
    })

    /*--------------------------自动轮播-----------------------*/
    function auto()

    {
        $box.timer = setInterval(() => {
            $btnRight.trigger("click")
        }, 5000)
    }

    /*--------------------------移入移出事件--------------------*/
    $box.hover(function () {
        clearInterval($box.timer)
        console.log(index)
    }, function () {
        auto()
    })
})
