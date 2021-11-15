
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
//==============BENCHAM======================//

 if($data['data']){
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"***VALID BIN✅
               
➤ Bɪɴ : $bin

➤ Tʏᴘᴇ : $type

➤ Bʀᴀɴᴅ : $vendor

➤ Bᴀɴᴋ : $bank

➤ Cᴏᴜɴᴛʀʏ : $country

➤ Cʀᴇᴅɪᴛ/Dᴇʙɪᴛ : $type

🔺BIN CHECKED FROM DATABASE OF BIN-SU🔻***",
'parse_mode'=>"MarkDown",
]);
    }
else {
bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"INVALID BIN❌",
               
]);
}
}

?>
p
