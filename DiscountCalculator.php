<?php

class DiscountCalculator{

    public function discountCalulator($json=""){
        $items = json_decode($json);
        $notOutlet=array();
        $notOutletItemPrice=array();
        $discountPercent=0;
        $discount=0;
        $itemCount=0;
        $freeItem=0;
        $discountItem=0;
        $totalPrice=0;
        $notOutletTotalPrice=0;

        foreach ($items as $item) {
            if(!$item->is_outlet){  //Not Outlet Items
                for($k=0;$k < $item->count;$k++){
                    $itemCount++;
                    if($itemCount%3 == 0){
                        $discountPercent += 10;
                        if($discountPercent>=100){
                            $freeItem++;
                        }else{  // Discount Percent < 100
                            $discountItem++;
                        }
                    }
                }
                $notOutlet[] = $item;
                $notOutletItemPrice[] =$item->price;
                $notOutletTotalPrice +=$item->price;
            }
            $totalPrice +=$item->price;
        }

        // Outlet Item Asc Sorting
        sort($notOutletItemPrice);

        for ($i=0;$i < $freeItem;$i++){
            $discount += $notOutletItemPrice[$i];  // Free Item Add Discount
        }

        $k=$discountItem;
        for ($i=$freeItem;$i < $discountItem; $i++){
            if($k!=0){
                $discount += $notOutletItemPrice[$i] *(10*$k) / 100;
                $k = $k-1;
            }
        }
        return $discount;

    }






}