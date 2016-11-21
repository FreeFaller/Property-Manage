package com.example.qbaobao.myapplication;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MineSettingActivity extends AppCompatActivity {

    private Button backPage1,btn1,btn2,btn3,btn4,btn5,btn6,btn7,btn8,btn9,btn10,cheap;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        getSupportActionBar().hide();
        setContentView(R.layout.activity_mine_setting);

        backPage1 = (Button)findViewById(R.id.backPage3_1);
        cheap = (Button)findViewById(R.id.cheap3_2);
        btn1 = (Button)findViewById(R.id.my_setting);
        btn2 = (Button)findViewById(R.id.headPic);
        btn3 = (Button)findViewById(R.id.ensure_add);
        btn4 = (Button)findViewById(R.id.my_information);
        btn5 = (Button)findViewById(R.id.my_oder);
        btn6 = (Button)findViewById(R.id.my_property);
        btn7 = (Button)findViewById(R.id.my_complain);
        btn8 = (Button)findViewById(R.id.my_repair);
        btn9 = (Button)findViewById(R.id.apply_bindling);
        btn10 = (Button)findViewById(R.id.view_bindling);
        backPage1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                MineSettingActivity.this.finish();
            }
        });
        cheap.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.CheapActivity");
                startActivity(i);
                MineSettingActivity.this.finish();
            }
        });
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingmysettingActivity");
                startActivity(i);
            }
        });
        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingheadPicActivity");
                startActivity(i);
            }
        });
        btn3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingensureaddActivity");
                startActivity(i);
            }
        });
        btn4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingmyinformationActivity");
                startActivity(i);
            }
        });
        btn5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingmyoderActivity");
                startActivity(i);
            }
        });
        btn6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingmypropertyActivity");
                startActivity(i);
            }
        });
        btn7.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingmycomplainActivity");
                startActivity(i);
            }
        });
        btn8.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingmyrepairActivity");
                startActivity(i);
            }
        });
        btn9.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingapplybindlingActivity");
                startActivity(i);
            }
        });
        btn10.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent("android.litreily.MineSettingviewbindlingActivity");
                startActivity(i);
            }
        });
    }
}
