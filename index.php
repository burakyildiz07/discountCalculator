<?php
    require_once 'DiscountCalculator.php';

    $items ="
   [
      {\"title\":\"Deneme Urun 1\",\"price\":47.2,\"count\":1,\"is_outlet\":true},
      {\"title\":\"Deneme Urun 2\",\"price\":7.3,\"count\":3,\"is_outlet\":true},
      {\"title\":\"Deneme Urun 3\",\"price\":234.63,\"count\":1,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 4\",\"price\":14.1,\"count\":1,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 5\",\"price\":54.3,\"count\":5,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 6\",\"price\":4.89,\"count\":2,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 7\",\"price\":48.4,\"count\":1,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 8\",\"price\":782.2,\"count\":1,\"is_outlet\":true},
      {\"title\":\"Deneme Urun 9\",\"price\":15.5,\"count\":1,\"is_outlet\":true},
      {\"title\":\"Deneme Urun 10\",\"price\":17.2,\"count\":4,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 11\",\"price\":73.5,\"count\":5,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 12\",\"price\":43.2,\"count\":2,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 13\",\"price\":29.75,\"count\":1,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 14\",\"price\":47.2,\"count\":3,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 15\",\"price\":17.25,\"count\":1,\"is_outlet\":true},
      {\"title\":\"Deneme Urun 16\",\"price\":46.2,\"count\":1,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 17\",\"price\":23.4,\"count\":1,\"is_outlet\":true},
      {\"title\":\"Deneme Urun 18\",\"price\":57.2,\"count\":1,\"is_outlet\":false},
      {\"title\":\"Deneme Urun 19\",\"price\":43.2,\"count\":1,\"is_outlet\":false}
    ]";

    $discount = new DiscountCalculator();
    echo $discount->discountCalulator($items);
