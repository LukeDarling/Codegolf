<?php $h=$u=1;$f=25;while($h>0){echo str_repeat(" ",$f);for($i=1;$i<=$h;$i++)echo chr(64+$i);$i-=2;for(;$i>0;$i--)echo chr(64+$i);$f-=$u;$h+=$u;if($h==26)$u=-1;echo"\n";}

// 170 bytes
// Output:
//                          A
//                         ABA
//                        ABCBA
//                       ABCDCBA
//                      ABCDEDCBA
//                     ABCDEFEDCBA
//                    ABCDEFGFEDCBA
//                   ABCDEFGHGFEDCBA
//                  ABCDEFGHIHGFEDCBA
//                 ABCDEFGHIJIHGFEDCBA
//                ABCDEFGHIJKJIHGFEDCBA
//               ABCDEFGHIJKLKJIHGFEDCBA
//              ABCDEFGHIJKLMLKJIHGFEDCBA
//             ABCDEFGHIJKLMNMLKJIHGFEDCBA
//            ABCDEFGHIJKLMNONMLKJIHGFEDCBA
//           ABCDEFGHIJKLMNOPONMLKJIHGFEDCBA
//          ABCDEFGHIJKLMNOPQPONMLKJIHGFEDCBA
//         ABCDEFGHIJKLMNOPQRQPONMLKJIHGFEDCBA
//        ABCDEFGHIJKLMNOPQRSRQPONMLKJIHGFEDCBA
//       ABCDEFGHIJKLMNOPQRSTSRQPONMLKJIHGFEDCBA
//      ABCDEFGHIJKLMNOPQRSTUTSRQPONMLKJIHGFEDCBA
//     ABCDEFGHIJKLMNOPQRSTUVUTSRQPONMLKJIHGFEDCBA
//    ABCDEFGHIJKLMNOPQRSTUVWVUTSRQPONMLKJIHGFEDCBA
//   ABCDEFGHIJKLMNOPQRSTUVWXWVUTSRQPONMLKJIHGFEDCBA
//  ABCDEFGHIJKLMNOPQRSTUVWXYXWVUTSRQPONMLKJIHGFEDCBA
// ABCDEFGHIJKLMNOPQRSTUVWXYZYXWVUTSRQPONMLKJIHGFEDCBA
//  ABCDEFGHIJKLMNOPQRSTUVWXYXWVUTSRQPONMLKJIHGFEDCBA
//   ABCDEFGHIJKLMNOPQRSTUVWXWVUTSRQPONMLKJIHGFEDCBA
//    ABCDEFGHIJKLMNOPQRSTUVWVUTSRQPONMLKJIHGFEDCBA
//     ABCDEFGHIJKLMNOPQRSTUVUTSRQPONMLKJIHGFEDCBA
//      ABCDEFGHIJKLMNOPQRSTUTSRQPONMLKJIHGFEDCBA
//       ABCDEFGHIJKLMNOPQRSTSRQPONMLKJIHGFEDCBA
//        ABCDEFGHIJKLMNOPQRSRQPONMLKJIHGFEDCBA
//         ABCDEFGHIJKLMNOPQRQPONMLKJIHGFEDCBA
//          ABCDEFGHIJKLMNOPQPONMLKJIHGFEDCBA
//           ABCDEFGHIJKLMNOPONMLKJIHGFEDCBA
//            ABCDEFGHIJKLMNONMLKJIHGFEDCBA
//             ABCDEFGHIJKLMNMLKJIHGFEDCBA
//              ABCDEFGHIJKLMLKJIHGFEDCBA
//               ABCDEFGHIJKLKJIHGFEDCBA
//                ABCDEFGHIJKJIHGFEDCBA
//                 ABCDEFGHIJIHGFEDCBA
//                  ABCDEFGHIHGFEDCBA
//                   ABCDEFGHGFEDCBA
//                    ABCDEFGFEDCBA
//                     ABCDEFEDCBA
//                      ABCDEDCBA
//                       ABCDCBA
//                        ABCBA
//                         ABA
//                          A
